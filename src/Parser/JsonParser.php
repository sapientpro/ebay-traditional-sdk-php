<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Parser;

use DateTime;
use DateTimeZone;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use stdClass;

use function is_array;
use function is_object;

class JsonParser
{
    /**
     * @param  BaseType $object A PHP object derived from SapientPro\EbayTraditionalSDK\Types\BaseType
     * @param  string  $json  the JSON string to parse
     */
    public static function parseAndAssignProperties(BaseType $object, string $json): void
    {
        $properties = '' !== $json ? json_decode($json, true) : [];
        self::assignProperties($object, $properties);
    }

    private static function assignProperties(BaseType $object, array $properties): void
    {
        foreach ($properties as $property => $value) {
            $propertyMeta = $object->elementMeta($property);
            // Property in the JSON may not exist as a property name in the class.
            // This could happen if the SDK is out of date with what eBay return.
            // It could also happen if eBay return elements that are not mentioned in any documentation!
            if ($propertyMeta) {
                $value = self::removeNull($value);
                if (null !== $value) {
                    $actualValue = self::determineActualValueToAssign($propertyMeta, $value);
                    $object->{$propertyMeta->propertyName} = $actualValue;
                }
            }
        }
    }

    /**
     * @param  mixed  $value  remove null elements if an array
     *
     * @return mixed original value if not an array or array without null elements
     */
    private static function removeNull(mixed $value): mixed
    {
        if (!is_array($value)) {
            return $value;
        }

        return array_filter($value, fn ($val) => null !== $val);
    }

    /**
     * @param  stdClass  $propertyMeta  the metadata for the property
     * @param  mixed  $value  the property value
     *
     * @return mixed
     */
    private static function determineActualValueToAssign(stdClass $propertyMeta, mixed $value): mixed
    {
        if ($propertyMeta->repeatable && is_array($value)) {
            $values = [];
            foreach ($value as $val) {
                $values[] = self::actualValue($propertyMeta, $val);
            }

            return $values;
        }

        return self::actualValue($propertyMeta, $value);
    }

    /**
     * @param  stdClass  $propertyMeta  the metadata for the property
     * @param  mixed  $value  the property value
     *
     * @return mixed
     */
    private static function actualValue(stdClass $propertyMeta, mixed $value): mixed
    {
        // Shortcut. Objects can be assigned as is.
        if (is_object($value)) {
            return $value;
        }

        $types = explode('|', $propertyMeta->phpType);

        foreach ($types as $type) {
            switch ($type) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'any':
                    return $value;

                case 'DateTime':
                    return new DateTime($value, new DateTimeZone('UTC'));
            }
        }

        $object = new $propertyMeta->phpType();
        self::assignProperties($object, $value);

        return $object;
    }
}
