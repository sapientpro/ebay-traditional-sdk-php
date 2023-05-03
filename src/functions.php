<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK;

use SapientPro\EbayTraditionalSDK\Credentials\Credentials;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsProvider;
use InvalidArgumentException;

use function count;
use function func_get_args;
use function get_class;
use function gettype;
use function is_array;
use function is_callable;
use function is_int;

/**
 * Returns a description of the type for the passed value.
 *
 * @param  mixed  $value  the value whos type will be described
 *
 * @return string a description of the value's type
 */
function describeType(mixed $value): string
{
    switch (gettype($value)) {
        case 'object':
            return 'object(' . get_class($value) . ')';

        case 'array':
            return 'array(' . count($value) . ')';

        default:
            ob_start();
            var_dump($value);

            return str_replace('double(', 'float(', rtrim(ob_get_clean()));
    }
}

/**
 * Merges multiple arrays, recursively, and returns the merged array.
 * Code taken from
 * https://api.drupal.org/api/drupal/includes!bootstrap.inc/function/drupal_array_merge_deep/7.
 *
 * @return array the merged array
 */
function arrayMergeDeep(): array
{
    $args = func_get_args();

    return arrayMergeDeepArray($args);
}

/**
 * Merges multiple arrays, recursively, and returns the merged array.
 *
 * @param  array  $arrays  the arrays to merge
 *
 * @return array the merged array
 */
function arrayMergeDeepArray(array $arrays): array
{
    $result = [];

    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            // Renumber integer keys as array_merge_recursive() does. Note that PHP
            // automatically converts array keys that are integer strings (e.g., '1')
            // to integers.
            if (is_int($key)) {
                $result[] = $value;
            } elseif (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                // Recurse when both values are arrays.
                $result[$key] = arrayMergeDeepArray([$result[$key], $value]);
            } else {
                // Otherwise, use the latter value, overriding any previous value.
                $result[$key] = $value;
            }
        }
    }

    return $result;
}

/**
 * Resolve and apply the passed credentials.
 *
 * @param  mixed  $value  the credentials
 * @param  array &$configuration  The configuration array where the resolved credentials will be stored
 *
 * @throws invalidArgumentException
 */
function applyCredentials(mixed $value, array &$configuration): void
{
    if (is_callable($value)) {
        $c = $value();
        if ($c instanceof InvalidArgumentException) {
            throw $c;
        }
        $configuration['credentials'] = $c;
    } elseif ($value instanceof CredentialsInterface) {
        return;
    } elseif (
        is_array($value)
        && isset($value['appId'], $value['certId'], $value['devId'])
    ) {
        $configuration['credentials'] = new Credentials(
            $value['appId'],
            $value['certId'],
            $value['devId']
        );
    } else {
        throw new InvalidArgumentException(
            'Credentials must be an instance of '
            . 'SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface, an associative '
            . 'array that contains "appId", "certId", "devId", '
            . 'or a credentials provider function.'
        );
    }
}

/**
 * Resolves the credentials with a ini provider.
 *
 * @param mixed $value needed for compatibility reasons
 * @param  array &$configuration  The configuration array where the provider will be stored
 */
function applyProfile(mixed $value, array &$configuration): void
{
    $configuration['credentials'] = CredentialsProvider::ini($configuration['profile']);
}

/**
 * Applies the default debugger if required.
 *
 * @param  mixed  $value  debugger options
 * @param  array &$configuration  The configuration array where the resolved debugger will be stored
 */
function applyDebug(mixed $value, array &$configuration): void
{
    if (false !== $value) {
        $configuration['debug'] = new Debugger(true === $value ? [] : $value);
    } else {
        $configuration['debug'] = false;
    }
}

/**
 * Returns the default HTTP handler.
 *
 * @return HttpHandler
 */
function defaultHttpHandler(): HttpHandler
{
    return new HttpHandler();
}

/**
 * Helper function that returns true if the property type should be checked.
 *
 * @param  string  $type  the type name
 *
 * @return bool
 */
function checkPropertyType(string $type): bool
{
    if (Sdk::$STRICT_PROPERTY_TYPES) {
        return true;
    }

    return match ($type) {
        'integer', 'string', 'double', 'boolean', 'DateTime' => false,
        default => true,
    };
}
