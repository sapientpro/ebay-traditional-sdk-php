<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CategoryType[] $categoryTypes
 * @property string $description
 * @property bool $freightShipping
 * @property string $fulfillmentPolicyId
 * @property bool $globalShipping
 * @property TimeDuration $handlingTime
 * @property bool $localPickup
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property bool $pickupDropOff
 * @property ShippingOption[] $shippingOptions
 * @property RegionSet $shipToLocations
 * @property ErrorDetailV3[] $warnings
 */
class SetFulfillmentPolicyResponse extends BaseType
{
    private static array $propertyTypes = [
            'categoryTypes'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\CategoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryTypes',
            ],
            'description'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'freightShipping'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'freightShipping',
            ],
            'fulfillmentPolicyId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fulfillmentPolicyId',
            ],
            'globalShipping'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'globalShipping',
            ],
            'handlingTime'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TimeDuration',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'handlingTime',
            ],
            'localPickup'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'localPickup',
            ],
            'marketplaceId'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'name'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'name',
            ],
            'pickupDropOff'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pickupDropOff',
            ],
            'shippingOptions'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ShippingOption',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingOptions',
            ],
            'shipToLocations'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\RegionSet',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipToLocations',
            ],
            'warnings'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
