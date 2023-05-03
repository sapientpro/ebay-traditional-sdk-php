<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\JmesPath;

use ArrayAccess;
use Closure;
use Countable;
use InvalidArgumentException;
use RuntimeException;
use stdClass;

use function count;
use function get_class;
use function gettype;
use function is_array;
use function is_string;
use function strlen;

class Utils
{
    public static $typeMap
        = [
            'boolean' => 'boolean',
            'string'  => 'string',
            'NULL'    => 'null',
            'double'  => 'number',
            'float'   => 'number',
            'integer' => 'number',
        ];

    /**
     * Returns true if the value is truthy.
     *
     * @param  mixed  $value  Value to check
     *
     * @return bool
     */
    public static function isTruthy($value)
    {
        if (!$value) {
            return 0 === $value || '0' === $value;
        }
        if ($value instanceof stdClass) {
            return (bool)get_object_vars($value);
        }
        if ($value instanceof JmesPathableArrayInterface) {
            return self::isTruthy(iterator_to_array($value));
        }
        if ($value instanceof JmesPathableObjectInterface) {
            return (bool)$value->toArray();
        }

        return true;
    }

    /**
     * Gets the JMESPath type equivalent of a PHP variable.
     *
     * @param  mixed  $arg  PHP variable
     *
     * @return string Returns the JSON data type
     * @throws InvalidArgumentException when an unknown type is given
     *
     */
    public static function type($arg)
    {
        $type = gettype($arg);
        if (isset(self::$typeMap[$type])) {
            return self::$typeMap[$type];
        }
        if ('array' === $type) {
            if (empty($arg)) {
                return 'array';
            }
            reset($arg);

            return 0 === key($arg) ? 'array' : 'object';
        }
        if ($arg instanceof stdClass) {
            return 'object';
        }
        if ($arg instanceof JmesPathableObjectInterface) {
            return 'object';
        }
        if ($arg instanceof Closure) {
            return 'expression';
        }
        if (
            $arg instanceof ArrayAccess
            && $arg instanceof Countable
        ) {
            return 0 === count($arg) || $arg->offsetExists(0)
                ? 'array'
                : 'object';
        }
        if (method_exists($arg, '__toString')) {
            return 'string';
        }

        throw new InvalidArgumentException(
            'Unable to determine JMESPath type from ' . get_class($arg)
        );
    }

    /**
     * Determine if the provided value is a JMESPath compatible object.
     *
     * @param  mixed  $value
     *
     * @return bool
     */
    public static function isObject($value)
    {
        if (is_array($value)) {
            return !$value || 0 !== array_keys($value)[0];
        }

        // Handle array-like values. Must be empty or offset 0 does not exist
        return $value instanceof Countable && $value instanceof ArrayAccess
            ? 0 === count($value) || !$value->offsetExists(0)
            : $value instanceof stdClass || $value instanceof JmesPathableObjectInterface;
    }

    public static function toArray($value)
    {
        if ($value instanceof JmesPathableArrayInterface) {
            return iterator_to_array($value);
        }
        if ($value instanceof JmesPathableObjectInterface) {
            return $value->toArray();
        }

        return $value;
    }

    /**
     * JSON aware value comparison function.
     *
     * @param  mixed  $a  First value to compare
     * @param  mixed  $b  Second value to compare
     *
     * @return bool
     */
    public static function isEqual($a, $b)
    {
        if ($a === $b) {
            return true;
        }
        if ($a instanceof stdClass) {
            return self::isEqual((array)$a, $b);
        }
        if ($b instanceof stdClass) {
            return self::isEqual($a, (array)$b);
        }
        if ($a instanceof JmesPathableArrayInterface) {
            return self::isEqual(iterator_to_array($a), $b);
        }
        if ($b instanceof JmesPathableArrayInterface) {
            return self::isEqual($a, iterator_to_array($b));
        }
        if ($a instanceof JmesPathableObjectInterface) {
            return self::isEqual($a->toArray(), $b);
        }
        if ($b instanceof JmesPathableObjectInterface) {
            return self::isEqual($a, $b->toArray());
        }

        return false;
    }

    /**
     * JMESPath requires a stable sorting algorithm, so here we'll implement
     * a simple Schwartzian transform that uses array index positions as tie
     * breakers.
     *
     * @param  array  $data  List or map of data to sort
     * @param  callable  $sortFn  Callable used to sort values
     *
     * @return array Returns the sorted array
     *
     * @see http://en.wikipedia.org/wiki/Schwartzian_transform
     */
    public static function stableSort(array $data, callable $sortFn)
    {
        // Decorate each item by creating an array of [value, index]
        array_walk($data, function (&$v, $k): void {
            $v = [$v, $k];
        });
        // Sort by the sort function and use the index as a tie-breaker
        uasort($data, fn ($a, $b) => $sortFn($a[0], $b[0]) ?: ($a[1] < $b[1] ? -1 : 1));

        // Undecorate each item and return the resulting sorted array
        return array_map(fn ($v) => $v[0], array_values($data));
    }

    /**
     * Creates a Python-style slice of a string or array.
     *
     * @param  array|string  $value  Value to slice
     * @param  null|int  $start  Starting position
     * @param  null|int  $stop  Stop position
     * @param  int  $step  Step (1, 2, -1, -2, etc.)
     *
     * @return array|string
     * @throws InvalidArgumentException
     *
     */
    public static function slice($value, $start = null, $stop = null, $step = 1)
    {
        if (!self::isArray($value) && !is_string($value)) {
            throw new InvalidArgumentException('Expects string or array');
        }

        return self::sliceIndices($value, $start, $stop, $step);
    }

    /**
     * Determine if the provided value is a JMESPath compatible array.
     *
     * @param  mixed  $value
     *
     * @return bool
     */
    public static function isArray($value)
    {
        if (is_array($value)) {
            return !$value || 0 === array_keys($value)[0];
        }

        // Handle array-like values. Must be empty or offset 0 exists.
        return $value instanceof Countable && $value instanceof ArrayAccess
            ? 0 === count($value) || $value->offsetExists(0)
            : $value instanceof JmesPathableArrayInterface;
    }

    private static function sliceIndices($subject, $start, $stop, $step)
    {
        $type = gettype($subject);
        $len = 'string' === $type ? strlen($subject) : count($subject);
        [$start, $stop, $step] = self::adjustSlice($len, $start, $stop, $step);

        $result = [];
        if ($step > 0) {
            for ($i = $start; $i < $stop; $i += $step) {
                $result[] = $subject[$i];
            }
        } else {
            for ($i = $start; $i > $stop; $i += $step) {
                $result[] = $subject[$i];
            }
        }

        return 'string' === $type ? implode('', $result) : $result;
    }

    private static function adjustSlice($length, $start, $stop, $step)
    {
        if (null === $step) {
            $step = 1;
        } elseif (0 === $step) {
            throw new RuntimeException('step cannot be 0');
        }

        if (null === $start) {
            $start = $step < 0 ? $length - 1 : 0;
        } else {
            $start = self::adjustEndpoint($length, $start, $step);
        }

        if (null === $stop) {
            $stop = $step < 0 ? -1 : $length;
        } else {
            $stop = self::adjustEndpoint($length, $stop, $step);
        }

        return [$start, $stop, $step];
    }

    private static function adjustEndpoint($length, $endpoint, $step)
    {
        if ($endpoint < 0) {
            $endpoint += $length;
            if ($endpoint < 0) {
                $endpoint = $step < 0 ? -1 : 0;
            }
        } elseif ($endpoint >= $length) {
            $endpoint = $step < 0 ? $length - 1 : $length;
        }

        return $endpoint;
    }
}
