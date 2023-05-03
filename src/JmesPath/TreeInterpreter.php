<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\JmesPath;

use ArrayAccess;
use RuntimeException;
use stdClass;

use function is_float;
use function is_int;

/**
 * Tree visitor used to evaluates JMESPath AST expressions.
 */
class TreeInterpreter
{
    /** @var callable */
    private $fnDispatcher;

    /**
     * @param  null|callable  $fnDispatcher  function dispatching function that accepts
     *                                    a function name argument and an array of
     *                                    function arguments and returns the result
     */
    public function __construct(callable $fnDispatcher = null)
    {
        $this->fnDispatcher = $fnDispatcher ?: FnDispatcher::getInstance();
    }

    /**
     * Visits each node in a JMESPath AST and returns the evaluated result.
     *
     * @param  array  $node  JMESPath AST node
     * @param  mixed  $data  Data to evaluate
     *
     * @return mixed
     */
    public function visit(array $node, $data)
    {
        return $this->dispatch($node, $data);
    }

    /**
     * Recursively traverses an AST using depth-first, pre-order traversal.
     * The evaluation logic for each node type is embedded into a large switch
     * statement to avoid the cost of "double dispatch".
     *
     * @param $value
     *
     * @return mixed
     */
    private function dispatch(array $node, $value)
    {
        $dispatcher = $this->fnDispatcher;

        switch ($node['type']) {
            case 'field':
                if (\is_array($value) || $value instanceof ArrayAccess) {
                    return $value[$node['value']] ?? null;
                }
                if ($value instanceof stdClass || $value instanceof JmesPathableObjectInterface) {
                    return $value->{$node['value']} ?? null;
                }

                return null;

            case 'subexpression':
                return $this->dispatch(
                    $node['children'][1],
                    $this->dispatch($node['children'][0], $value)
                );

            case 'index':
                if (!Utils::isArray($value)) {
                    return null;
                }
                $idx = $node['value'] >= 0
                    ? $node['value']
                    : $node['value'] + \count($value);

                return $value[$idx] ?? null;

            case 'projection':
                $left = $this->dispatch($node['children'][0], $value);

                switch ($node['from']) {
                    case 'object':
                        if (!Utils::isObject($left)) {
                            return null;
                        }

                        break;

                    case 'array':
                        if (!Utils::isArray($left)) {
                            return null;
                        }

                        break;

                    default:
                        if (!\is_array($left) || !($left instanceof stdClass)) {
                            return null;
                        }
                }

                $collected = [];
                foreach ((array)Utils::toArray($left) as $val) {
                    $result = $this->dispatch($node['children'][1], $val);
                    if (null !== $result) {
                        $collected[] = $result;
                    }
                }

                return $collected;

            case 'flatten':
                static $skipElement = [];
                $value = $this->dispatch($node['children'][0], $value);

                if (!Utils::isArray($value)) {
                    return null;
                }

                $merged = [];
                foreach ($value as $values) {
                    $values = Utils::toArray($values);
                    // Only merge up arrays lists and not hashes
                    if (\is_array($values) && isset($values[0])) {
                        $merged = array_merge($merged, $values);
                    } elseif ($values !== $skipElement) {
                        $merged[] = $values;
                    }
                }

                return $merged;

            case 'literal':
                return $node['value'];

            case 'current':
                return $value;

            case 'or':
                $result = $this->dispatch($node['children'][0], $value);

                return Utils::isTruthy($result)
                    ? $result
                    : $this->dispatch($node['children'][1], $value);

            case 'and':
                $result = $this->dispatch($node['children'][0], $value);

                return Utils::isTruthy($result)
                    ? $this->dispatch($node['children'][1], $value)
                    : $result;

            case 'not':
                return !Utils::isTruthy(
                    $this->dispatch($node['children'][0], $value)
                );

            case 'pipe':
                return $this->dispatch(
                    $node['children'][1],
                    $this->dispatch($node['children'][0], $value)
                );

            case 'multi_select_list':
                if (null === $value) {
                    return null;
                }

                $collected = [];
                foreach ($node['children'] as $node) {
                    $collected[] = $this->dispatch($node, $value);
                }

                return $collected;

            case 'multi_select_hash':
                if (null === $value) {
                    return null;
                }

                $collected = [];
                foreach ($node['children'] as $node) {
                    $collected[$node['value']] = $this->dispatch(
                        $node['children'][0],
                        $value
                    );
                }

                return $collected;

            case 'comparator':
                $left = $this->dispatch($node['children'][0], $value);
                $right = $this->dispatch($node['children'][1], $value);
                if ('==' === $node['value']) {
                    return Utils::isEqual($left, $right);
                }
                if ('!=' === $node['value']) {
                    return !Utils::isEqual($left, $right);
                }

                return self::relativeCmp($left, $right, $node['value']);

            case 'condition':
                return Utils::isTruthy($this->dispatch($node['children'][0], $value))
                    ? $this->dispatch($node['children'][1], $value)
                    : null;

            case 'function':
                $args = [];
                foreach ($node['children'] as $arg) {
                    $args[] = $this->dispatch($arg, $value);
                }

                return $dispatcher($node['value'], $args);

            case 'slice':
                return \is_string($value) || Utils::isArray($value)
                    ? Utils::slice(
                        Utils::toArray($value),
                        $node['value'][0],
                        $node['value'][1],
                        $node['value'][2]
                    ) : null;

            case 'expref':
                $apply = $node['children'][0];

                return fn ($value) => $this->visit($apply, $value);

            default:
                throw new RuntimeException("Unknown node type: {$node['type']}");
        }
    }

    /**
     * @param $left
     * @param $right
     * @param $cmp
     *
     * @return bool
     */
    private static function relativeCmp($left, $right, $cmp)
    {
        if (!(is_int($left) || is_float($left)) || !(is_int($right) || is_float($right))) {
            return false;
        }

        switch ($cmp) {
            case '>':
                return $left > $right;

            case '>=':
                return $left >= $right;

            case '<':
                return $left < $right;

            case '<=':
                return $left <= $right;

            default:
                throw new RuntimeException("Invalid comparison: {$cmp}");
        }
    }
}
