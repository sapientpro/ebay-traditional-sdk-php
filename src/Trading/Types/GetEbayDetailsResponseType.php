<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property CountryDetailsType[] $CountryDetails
 * @property CurrencyDetailsType[] $CurrencyDetails
 * @property DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
 * @property PaymentOptionDetailsType[] $PaymentOptionDetails
 * @property RegionDetailsType[] $RegionDetails
 * @property ShippingLocationDetailsType[] $ShippingLocationDetails
 * @property ShippingServiceDetailsType[] $ShippingServiceDetails
 * @property SiteDetailsType[] $SiteDetails
 * @property TaxJurisdictionType[] $TaxJurisdiction
 * @property URLDetailsType[] $URLDetails
 * @property TimeZoneDetailsType[] $TimeZoneDetails
 * @property ItemSpecificDetailsType[] $ItemSpecificDetails
 * @property RegionOfOriginDetailsType[] $RegionOfOriginDetails
 * @property ShippingPackageDetailsType[] $ShippingPackageDetails
 * @property ShippingCarrierDetailsType[] $ShippingCarrierDetails
 * @property ReturnPolicyDetailsType $ReturnPolicyDetails
 * @property ListingStartPriceDetailsType[] $ListingStartPriceDetails
 * @property SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
 * @property ListingFeatureDetailsType[] $ListingFeatureDetails
 * @property VariationDetailsType $VariationDetails
 * @property ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
 * @property DateTime $UpdateTime
 * @property RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
 * @property ShippingCategoryDetailsType[] $ShippingCategoryDetails
 * @property ProductDetailsType $ProductDetails
 */
class GetEbayDetailsResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CountryDetails'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CountryDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CountryDetails',
            ],
            'CurrencyDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CurrencyDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CurrencyDetails',
            ],
            'DispatchTimeMaxDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DispatchTimeMaxDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DispatchTimeMaxDetails',
            ],
            'PaymentOptionDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaymentOptionDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentOptionDetails',
            ],
            'RegionDetails'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RegionDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RegionDetails',
            ],
            'ShippingLocationDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingLocationDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingLocationDetails',
            ],
            'ShippingServiceDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingServiceDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingServiceDetails',
            ],
            'SiteDetails'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SiteDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SiteDetails',
            ],
            'TaxJurisdiction'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TaxJurisdictionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'TaxJurisdiction',
            ],
            'URLDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\URLDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'URLDetails',
            ],
            'TimeZoneDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TimeZoneDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'TimeZoneDetails',
            ],
            'ItemSpecificDetails'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemSpecificDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ItemSpecificDetails',
            ],
            'RegionOfOriginDetails'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RegionOfOriginDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RegionOfOriginDetails',
            ],
            'ShippingPackageDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingPackageDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingPackageDetails',
            ],
            'ShippingCarrierDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingCarrierDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingCarrierDetails',
            ],
            'ReturnPolicyDetails'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReturnPolicyDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicyDetails',
            ],
            'ListingStartPriceDetails'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingStartPriceDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingStartPriceDetails',
            ],
            'BuyerRequirementDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SiteBuyerRequirementDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'BuyerRequirementDetails',
            ],
            'ListingFeatureDetails'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingFeatureDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingFeatureDetails',
            ],
            'VariationDetails'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VariationDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationDetails',
            ],
            'ExcludeShippingLocationDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ExcludeShippingLocationDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExcludeShippingLocationDetails',
            ],
            'UpdateTime'                     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
            ],
            'RecoupmentPolicyDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RecoupmentPolicyDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RecoupmentPolicyDetails',
            ],
            'ShippingCategoryDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingCategoryDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingCategoryDetails',
            ],
            'ProductDetails'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductDetails',
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
