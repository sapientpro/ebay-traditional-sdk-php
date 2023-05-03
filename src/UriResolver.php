<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK;

use InvalidArgumentException;

use function array_key_exists;
use function is_array;
use function is_bool;
use function is_callable;

/**
 * @internal resolves a resource uri
 */
final class UriResolver
{
    /**
     * @var array map of type to function that confirms type
     */
    private static array $typeMap = [
            'array'    => 'is_array',
            'bool'     => 'is_bool',
            'callable' => 'is_callable',
            'int'      => 'is_int',
            'string'   => 'is_string',
    ];

    /**
     * Resolve and validate the passed uri.
     *
     * @param  string  $uri  uri to resolve
     * @param  string  $version  API version
     * @param  string  $resource  the name of the resource
     * @param  array  $paramDefs  associative array of uri parameter definitions for the operation
     * @param  array  $paramValues  associative array of uri parameter values for the operation
     *
     * @return string returns a resolved uri
     * @throws invalidArgumentException
     *
     */
    public function resolve(
        string $uri,
        string $version,
        string $resource,
        array $paramDefs,
        array $paramValues
    ): string {
        foreach ($paramValues as $param => $value) {
            if (!array_key_exists($param, $paramDefs)) {
                throw new InvalidArgumentException("Unknown uri parameter \"{$param}\" provided");
            }
        }

        foreach ($paramDefs as $key => $def) {
            if (!isset($paramValues[$key])) {
                if (isset($def['default'])) {
                    $paramValues[$key] = is_callable($def['default'])
                        ? $def['default']($paramValues)
                        : $def['default'];
                } elseif (empty($def['required'])) {
                    continue;
                } else {
                    $this->throwRequired($paramDefs, $paramValues);
                }
            }

            $this->checkType($def['valid'], $key, $paramValues[$key]);

            if (isset($def['fn'])) {
                $def['fn']($paramValues[$key], $paramValues);
            }
        }

        return
            "{$uri}/" .
            "{$version}/" .
            $this->fillPathParams($resource, $paramValues) .
            $this->buildQueryParameters($paramValues);
    }

    private function throwRequired(array $paramDefs, array $paramValues): void
    {
        $missing = [];

        foreach ($paramDefs as $key => $def) {
            if (
                empty($def['required'])
                || isset($def['default'])
                || array_key_exists($key, $paramValues)
            ) {
                continue;
            }
            $missing[] = $key;
        }

        $msg = "Missing required uri parameters: \n\n";
        $msg .= implode("\n\n", $missing);

        throw new InvalidArgumentException($msg);
    }

    private function checkType(array $valid, $name, $provided): void
    {
        foreach ($valid as $check) {
            if (isset(self::$typeMap[$check])) {
                $fn = self::$typeMap[$check];
                if ($fn($provided)) {
                    return;
                }
            } elseif ($provided instanceof $check) {
                return;
            }
        }

        $expected = implode('|', $valid);
        $msg = sprintf(
            'Invalid uri parameter value provided for "%s". Expected %s, but got %s',
            $name,
            $expected,
            describeType($provided)
        );

        throw new InvalidArgumentException($msg);
    }

    /**
     * Replaces path parameters placeholders in the uri with the correct values.
     *
     * @param  string  $uri  a uri with path parameters
     * @param  array  $paramValues  associative array of path parameter names and their values
     *
     * @return string the path
     */
    private function fillPathParams(string $uri, array &$paramValues): string
    {
        return preg_replace_callback('/{(\S+)}/U', function ($matches) use (&$paramValues) {
            $path = $matches[1];
            if (array_key_exists($path, $paramValues)) {
                $value = $paramValues[$path];
                unset($paramValues[$path]);
            } else {
                $value = $path;
            }

            return $value;
        }, $uri);
    }

    /**
     * Builds a query parameters string.
     *
     * @param  array  $paramValues  associative array of query parameter names and their values
     *
     * @return string The query parameters string
     */
    private function buildQueryParameters(array $paramValues): string
    {
        if (empty($paramValues)) {
            return '';
        }

        $query = [];
        foreach ($paramValues as $param => $value) {
            if (is_array($value)) {
                $value = implode(',', $value);
            } elseif (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            } elseif (is_callable($value)) {
                $value = $value();
            }
            $query[] = $param . '=' . urlencode((string)$value);
        }

        return '?' . implode('&', $query);
    }
}
