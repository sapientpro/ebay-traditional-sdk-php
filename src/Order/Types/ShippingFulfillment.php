<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $actualDeliveryDate
 * @property LineItemReference[] $lineItemReferences
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property string $shipmentTrackingNumber
 * @property string $shipmentTrackingUrl
 * @property string $shippedDate
 * @property string $shippingCarrierCode
 * @property string $shippingServiceCode
 */
class ShippingFulfillment extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'actualDeliveryDate'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actualDeliveryDate',
            ],
            'lineItemReferences'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\LineItemReference',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItemReferences',
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
            'shipmentTrackingNumber'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipmentTrackingNumber',
            ],
            'shipmentTrackingUrl'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipmentTrackingUrl',
            ],
            'shippedDate'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippedDate',
            ],
            'shippingCarrierCode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierCode',
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
