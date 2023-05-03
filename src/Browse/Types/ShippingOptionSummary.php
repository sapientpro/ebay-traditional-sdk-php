<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property ConvertedAmount $shippingCost
 * @property string $shippingCostType
 */
class ShippingOptionSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'maxEstimatedDeliveryDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxEstimatedDeliveryDate',
            ],
            'minEstimatedDeliveryDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minEstimatedDeliveryDate',
            ],
            'shippingCost'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingCostType'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCostType',
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
