<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $additionalShippingCost
 * @property bool $buyerResponsibleForPickup
 * @property bool $buyerResponsibleForShipping
 * @property Amount $cashOnDeliveryFee
 * @property bool $freeShipping
 * @property string $shippingCarrierCode
 * @property Amount $shippingCost
 * @property string $shippingServiceCode
 * @property RegionSet $shipToLocations
 * @property int $sortOrder
 * @property Amount $surcharge
 */
class ShippingService extends BaseType
{
    private static array $propertyTypes = [
            'additionalShippingCost'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'additionalShippingCost',
            ],
            'buyerResponsibleForPickup'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerResponsibleForPickup',
            ],
            'buyerResponsibleForShipping' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerResponsibleForShipping',
            ],
            'cashOnDeliveryFee'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cashOnDeliveryFee',
            ],
            'freeShipping'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'freeShipping',
            ],
            'shippingCarrierCode'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierCode',
            ],
            'shippingCost'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingServiceCode'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceCode',
            ],
            'shipToLocations'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\RegionSet',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipToLocations',
            ],
            'sortOrder'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortOrder',
            ],
            'surcharge'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'surcharge',
            ],
    ];

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
