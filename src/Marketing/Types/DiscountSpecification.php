<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $forEachAmount
 * @property int $forEachQuantity
 * @property Amount $minAmount
 * @property int $minQuantity
 * @property int $numberOfDiscountedItems
 */
class DiscountSpecification extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'forEachAmount'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'forEachAmount',
            ],
            'forEachQuantity'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'forEachQuantity',
            ],
            'minAmount'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minAmount',
            ],
            'minQuantity'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minQuantity',
            ],
            'numberOfDiscountedItems' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'numberOfDiscountedItems',
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
