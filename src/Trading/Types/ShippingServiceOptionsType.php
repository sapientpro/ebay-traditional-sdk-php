<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $ShippingInsuranceCost
 * @property string $ShippingService
 * @property AmountType $ShippingServiceCost
 * @property AmountType $ShippingServiceAdditionalCost
 * @property int $ShippingServicePriority
 * @property bool $ExpeditedService
 * @property int $ShippingTimeMin
 * @property int $ShippingTimeMax
 * @property AmountType $ShippingSurcharge
 * @property bool $FreeShipping
 * @property bool $LocalPickup
 * @property AmountType $ImportCharge
 * @property ShippingPackageInfoType[] $ShippingPackageInfo
 * @property DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingInsuranceCost'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingInsuranceCost',
            ],
            'ShippingService'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingService',
            ],
            'ShippingServiceCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCost',
            ],
            'ShippingServiceAdditionalCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceAdditionalCost',
            ],
            'ShippingServicePriority'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServicePriority',
            ],
            'ExpeditedService'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExpeditedService',
            ],
            'ShippingTimeMin'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMin',
            ],
            'ShippingTimeMax'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMax',
            ],
            'ShippingSurcharge'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingSurcharge',
            ],
            'FreeShipping'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreeShipping',
            ],
            'LocalPickup'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalPickup',
            ],
            'ImportCharge'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ImportCharge',
            ],
            'ShippingPackageInfo'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingPackageInfoType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingPackageInfo',
            ],
            'ShippingServiceCutOffTime'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCutOffTime',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
