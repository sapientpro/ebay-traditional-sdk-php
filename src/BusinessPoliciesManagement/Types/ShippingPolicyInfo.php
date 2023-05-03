<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\IsoCurrencyCode;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $shippingPolicyName
 * @property string $domesticShippingType
 * @property string $intlShippingType
 * @property int $dispatchTimeMax
 * @property string $dispatchTimeReason
 * @property string $shippingOption
 * @property string[] $excludeShipToLocation
 * @property ShippingProfileDiscountInfo $shippingProfileDiscountInfo
 * @property FreightShipping $freightShipping
 * @property string[] $shipToLocations
 * @property ShippingPolicyInfoService[] $domesticShippingPolicyInfoService
 * @property ShippingPolicyInfoService[] $intlShippingPolicyInfoService
 * @property Insurance $insurance
 * @property string $intlRateTable
 * @property string $domesticRateTable
 * @property Amount $packagingHandlingCosts
 * @property Amount $internationalPackagingHandlingCosts
 * @property IsoCurrencyCode $shippingPolicyCurrency
 * @property bool $GlobalShipping
 * @property bool $EligibleForPickupDropOff
 */
class ShippingPolicyInfo extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'shippingPolicyName'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingPolicyName',
            ],
            'domesticShippingType'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domesticShippingType',
            ],
            'intlShippingType'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'intlShippingType',
            ],
            'dispatchTimeMax'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dispatchTimeMax',
            ],
            'dispatchTimeReason'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dispatchTimeReason',
            ],
            'shippingOption'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingOption',
            ],
            'excludeShipToLocation'               => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'excludeShipToLocation',
            ],
            'shippingProfileDiscountInfo'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingProfileDiscountInfo',
            ],
            'freightShipping'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\FreightShipping',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'freightShipping',
            ],
            'shipToLocations'                     => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shipToLocations',
            ],
            'domesticShippingPolicyInfoService'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'domesticShippingPolicyInfoService',
            ],
            'intlShippingPolicyInfoService'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'intlShippingPolicyInfoService',
            ],
            'insurance'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Insurance',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'insurance',
            ],
            'intlRateTable'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'intlRateTable',
            ],
            'domesticRateTable'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domesticRateTable',
            ],
            'packagingHandlingCosts'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'packagingHandlingCosts',
            ],
            'internationalPackagingHandlingCosts' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'internationalPackagingHandlingCosts',
            ],
            'shippingPolicyCurrency'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingPolicyCurrency',
            ],
            'GlobalShipping'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShipping',
            ],
            'EligibleForPickupDropOff'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EligibleForPickupDropOff',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
