<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\JmesPath;

use Closure;
use JsonSerializable;
use RuntimeException;

use function count;
use function is_object;
use function is_string;

/**
 * Dispatches to named JMESPath functions using a single function that has the
 * following signature:.
 *
 *     mixed $result = fn(string $function_name, array $args)
 */
class FnDispatcher
{
    /**
     * Gets a cached instance of the default function implementations.
     *
     * @return FnDispatcher
     */
    public static function getInstance(): FnDispatcher
    {
        static $instance = null;
        if (!$instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * @param  string  $fn  function name
     * @param  array  $args  function arguments
     *
     * @return mixed
     */
    public function __invoke(string $fn, array $args): mixed
    {
        return $this->{'fn_' . $fn}($args);
    }

    /** @param $name
     * @param $args
     *
     * @internal Pass function name validation off to runtime
     */
    public function __call($name, $args): void
    {
        $name = str_replace('fn_', '', $name);

        throw new RuntimeException("Call to undefined function {$name}");
    }

    private function fn_abs(array $args): float|int
    {
        $this->validate('abs', $args, [['number']]);

        return abs($args[0]);
    }

    private function validate($from, $args, $types = []): void
    {
        $this->validateArity($from, count($args), count($types));
        foreach ($args as $index => $value) {
            if (!isset($types[$index]) || !$types[$index]) {
                continue;
            }
            $this->validateType("{$from}:{$index}", $value, $types[$index]);
        }
    }

    private function validateArity($from, $given, $expected): void
    {
        if ($given !== $expected) {
            $err = "%s() expects {$expected} arguments, {$given} were provided";

            throw new RuntimeException(sprintf($err, $from));
        }
    }

    private function validateType($from, $value, array $types): void
    {
        if (
            'any' === $types[0]
            || \in_array(Utils::type($value), $types, true)
            || ([] === $value && \in_array('object', $types, true))
        ) {
            return;
        }
        $msg = 'must be one of the following types: ' . implode(', ', $types)
            . '. ' . Utils::type($value) . ' found';
        $this->typeError($from, $msg);
    }

    private function typeError($from, $msg): void
    {
        if (strpos($from, ':')) {
            [$fn, $pos] = explode(':', $from);

            throw new RuntimeException(
                sprintf('Argument %d of %s %s', $pos, $fn, $msg)
            );
        }

        throw new RuntimeException(
            sprintf('Type error: %s %s', $from, $msg)
        );
    }

    private function fn_avg(array $args): float|int|null
    {
        $this->validate('avg', $args, [['array']]);
        $arg = Utils::toArray($args[0]);
        $sum = $this->reduce('avg:0', $arg, ['number'], fn ($a, $b) => $a + $b);

        return $arg ? ($sum / count($arg)) : null;
    }

    /**
     * Reduces and validates an array of values to a single value using a fn.
     *
     * @param  string  $from  String of function:argument_position
     * @param  array  $values  values to reduce
     * @param  array  $types  array of valid value types
     * @param  callable  $reduce  reduce function that accepts ($carry, $item)
     *
     * @return mixed
     */
    private function reduce(string $from, array $values, array $types, callable $reduce): mixed
    {
        $i = -1;

        return array_reduce(
            $values,
            function ($carry, $item) use ($from, $types, $reduce, &$i) {
                if (++$i > 0) {
                    $this->validateSeq($from, $types, $carry, $item);
                }

                return $reduce($carry, $item, $i);
            }
        );
    }

    /**
     * Validates value A and B, ensures they both are correctly typed, and of
     * the same type.
     *
     * @param  string  $from  String of function:argument_position
     * @param  array  $types  array of valid value types
     * @param  mixed  $a  Value A
     * @param  mixed  $b  Value B
     */
    private function validateSeq(string $from, array $types, mixed $a, mixed $b): void
    {
        $ta = Utils::type($a);
        $tb = Utils::type($b);

        if ($ta !== $tb) {
            $msg = "encountered a type mismatch in sequence: {$ta}, {$tb}";
            $this->typeError($from, $msg);
        }

        $typeMatch = ($types && 'any' === $types[0]) || \in_array($ta, $types, true);
        if (!$typeMatch) {
            $msg = 'encountered a type error in sequence. The argument must be '
                . 'an array of ' . implode('|', $types) . ' types. '
                . "Found {$ta}, {$tb}.";
            $this->typeError($from, $msg);
        }
    }

    private function fn_ceil(array $args): float
    {
        $this->validate('ceil', $args, [['number']]);

        return ceil($args[0]);
    }

    private function fn_contains(array $args): ?bool
    {
        $this->validate('contains', $args, [['string', 'array'], ['any']]);
        $arg = Utils::toArray($args[0]);
        if (\is_array($arg)) {
            return \in_array($args[1], $arg, true);
        }
        if (is_string($args[1])) {
            return str_contains($arg, $args[1]);
        }

        return null;
    }

    private function fn_ends_with(array $args): bool
    {
        $this->validate('ends_with', $args, [['string'], ['string']]);
        [$search, $suffix] = $args;

        return '' === $suffix || str_ends_with($search, $suffix);
    }

    private function fn_floor(array $args): float
    {
        $this->validate('floor', $args, [['number']]);

        return floor($args[0]);
    }

    private function fn_not_null(array $args)
    {
        if (!$args) {
            throw new RuntimeException(
                'not_null() expects 1 or more arguments, 0 were provided'
            );
        }

        return array_reduce($args, static fn ($carry, $item) => $carry ?? $item);
    }

    private function fn_join(array $args)
    {
        $this->validate('join', $args, [['string'], ['array']]);
        $fn = fn ($a, $b, $i) => $i ? ($a . $args[0] . $b) : $b;

        return $this->reduce('join:0', Utils::toArray($args[1]), ['string'], $fn);
    }

    private function fn_keys(array $args): array
    {
        $this->validate('keys', $args, [['object']]);

        return array_keys((array)Utils::toArray($args[0]));
    }

    private function fn_length(array $args): int
    {
        $this->validate('length', $args, [['string', 'array', 'object']]);
        $arg = Utils::toArray($args[0]);

        return is_string($arg) ? \strlen($arg) : count((array)$arg);
    }

    private function fn_max(array $args)
    {
        $this->validate('max', $args, [['array']]);
        $fn = fn ($a, $b) => $a >= $b ? $a : $b;

        return $this->reduce('max:0', Utils::toArray($args[0]), ['number', 'string'], $fn);
    }

    private function fn_max_by(array $args)
    {
        $this->validate('max_by', $args, [['array'], ['expression']]);
        $expr = $this->wrapExpression('max_by:1', $args[1], ['number', 'string']);
        $fn = function ($carry, $item, $index) use ($expr) {
            return ($index && $expr($carry) >= $expr($item)) ? $carry : $item;
        };

        return $this->reduce('max_by:1', Utils::toArray($args[0]), ['any'], $fn);
    }

    /**
     * Validates the return values of expressions as they are applied.
     *
     * @param  string  $from  Function name : position
     * @param  callable  $expr  expression function to validate
     * @param  array  $types  array of acceptable return type values
     *
     * @return callable|Closure Returns a wrapped function
     */
    private function wrapExpression(string $from, callable $expr, array $types): callable|Closure
    {
        [$fn, $pos] = explode(':', $from);
        $from = "The expression return value of argument {$pos} of {$fn}";

        return function ($value) use ($from, $expr, $types) {
            $value = $expr($value);
            $this->validateType($from, $value, $types);

            return $value;
        };
    }

    private function fn_min(array $args)
    {
        $this->validate('min', $args, [['array']]);
        $fn = fn ($a, $b, $i) => $i && $a <= $b ? $a : $b;

        return $this->reduce('min:0', Utils::toArray($args[0]), ['number', 'string'], $fn);
    }

    private function fn_min_by(array $args)
    {
        $this->validate('min_by', $args, [['array'], ['expression']]);
        $expr = $this->wrapExpression('min_by:1', $args[1], ['number', 'string']);
        $i = -1;
        $fn = function ($a, $b) use ($expr, &$i) {
            return (++$i && $expr($a) <= $expr($b)) ? $a : $b;
        };

        return $this->reduce('min_by:1', Utils::toArray($args[0]), ['any'], $fn);
    }

    private function fn_reverse(array $args)
    {
        $this->validate('reverse', $args, [['array', 'string']]);
        $arg = Utils::toArray($args[0]);
        if (\is_array($arg)) {
            return array_reverse($arg);
        }
        if (is_string($arg)) {
            return strrev($arg);
        }

        throw new RuntimeException('Cannot reverse provided argument');
    }

    private function fn_sum(array $args)
    {
        $this->validate('sum', $args, [['array']]);
        $fn = fn ($a, $b) => $a + $b;

        return $this->reduce('sum:0', Utils::toArray($args[0]), ['number'], $fn);
    }

    private function fn_sort(array $args): array
    {
        $this->validate('sort', $args, [['array']]);
        $valid = ['string', 'number'];

        return Utils::stableSort(Utils::toArray($args[0]), function ($a, $b) use ($valid) {
            $this->validateSeq('sort:0', $valid, $a, $b);

            return strnatcmp($a, $b);
        });
    }

    private function fn_sort_by(array $args): array
    {
        $this->validate('sort_by', $args, [['array'], ['expression']]);
        $expr = $args[1];
        $valid = ['string', 'number'];

        return Utils::stableSort(
            Utils::toArray($args[0]),
            function ($a, $b) use ($expr, $valid) {
                $va = $expr($a);
                $vb = $expr($b);
                $this->validateSeq('sort_by:0', $valid, $va, $vb);

                return strnatcmp($va, $vb);
            }
        );
    }

    private function fn_starts_with(array $args): bool
    {
        $this->validate('starts_with', $args, [['string'], ['string']]);
        [$search, $prefix] = $args;

        return '' === $prefix || str_starts_with($search, $prefix);
    }

    private function fn_type(array $args): string
    {
        $this->validateArity('type', count($args), 1);

        return Utils::type($args[0]);
    }

    /**
     * @throws \JsonException
     */
    private function fn_to_string(array $args): bool|string
    {
        $this->validateArity('to_string', count($args), 1);
        $v = $args[0];
        if (is_string($v)) {
            return $v;
        }
        if (
            is_object($v)
            && !($v instanceof JsonSerializable)
            && method_exists($v, '__toString')
        ) {
            return (string)$v;
        }
        if (Utils::isArray($v)) {
            $v = Utils::toArray($v);
        }

        return json_encode($v, JSON_THROW_ON_ERROR);
    }

    private function fn_to_number(array $args)
    {
        $this->validateArity('to_number', count($args), 1);
        $value = $args[0];
        $type = Utils::type($value);
        if ('number' === $type) {
            return $value;
        }
        if ('string' === $type && is_numeric($value)) {
            return strpos($value, '.') ? (float)$value : (int)$value;
        }

        return null;
    }

    private function fn_values(array $args): array
    {
        $this->validate('values', $args, [['array', 'object']]);

        return array_values((array)Utils::toArray($args[0]));
    }

    private function fn_merge(array $args)
    {
        if (!$args) {
            throw new RuntimeException(
                'merge() expects 1 or more arguments, 0 were provided'
            );
        }

        return array_reduce($args, static fn ($carry, $arg) => array_replace($carry, Utils::toArray($arg)), []);
    }

    private function fn_to_array(array $args)
    {
        $this->validate('to_array', $args, [['any']]);

        return Utils::isArray($args[0]) ? Utils::toArray($args[0]) : [$args[0]];
    }

    private function fn_map(array $args): array
    {
        $this->validate('map', $args, [['expression'], ['any']]);
        $result = [];
        foreach ($args[1] as $a) {
            $result[] = $args[0]($a);
        }

        return $result;
    }
}
