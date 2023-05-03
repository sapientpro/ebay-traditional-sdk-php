<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $amountOffItem
 * @property Amount $amountOffOrder
 * @property string $percentageOffItem
 * @property string $percentageOffOrder
 */
class DiscountBenefit extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'amountOffItem'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amountOffItem',
            ],
            'amountOffOrder'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amountOffOrder',
            ],
            'percentageOffItem'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'percentageOffItem',
            ],
            'percentageOffOrder' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'percentageOffOrder',
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
