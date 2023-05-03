<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $baseDeliveryCost
 * @property Amount $deliveryDiscount
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property bool $selected
 * @property string $shippingCarrierCode
 * @property string $shippingOptionId
 * @property string $shippingServiceCode
 */
class ShippingOption extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'baseDeliveryCost'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'baseDeliveryCost',
            ],
            'deliveryDiscount'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deliveryDiscount',
            ],
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
            'selected'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'selected',
            ],
            'shippingCarrierCode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierCode',
            ],
            'shippingOptionId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingOptionId',
            ],
            'shippingServiceCode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceCode',
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
