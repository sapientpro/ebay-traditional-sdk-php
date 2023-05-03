<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Types;

use function array_key_exists;

/**
 * Base class for objects that correspond to decimal types in the XML.
 *
 * @property int $value
 */
class DecimalType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'value' => [
                'type'       => 'integer|double',
                'repeatable' => false,
                'attribute'  => false,
            ],
        ];

    /**
     * @param  array  $values  optional properties and values to assign to the object
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
