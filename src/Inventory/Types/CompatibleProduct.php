<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $notes
 * @property ProductFamilyProperties $productFamilyProperties
 * @property ProductIdentifier $productIdentifier
 */
class CompatibleProduct extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'notes'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'notes',
            ],
            'productFamilyProperties' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ProductFamilyProperties',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productFamilyProperties',
            ],
            'productIdentifier'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ProductIdentifier',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productIdentifier',
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
