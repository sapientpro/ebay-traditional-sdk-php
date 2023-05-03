<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\CountryCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\HalfItemConditionCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\ListingStatusCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\ListingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\QuantityAvailableHintCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $BestOfferEnabled
 * @property AmountType $BuyItNowPrice
 * @property string $Description
 * @property string $ItemID
 * @property bool $BuyItNowAvailable
 * @property AmountType $ConvertedBuyItNowPrice
 * @property DateTime $EndTime
 * @property DateTime $StartTime
 * @property string $ViewItemURLForNaturalSearch
 * @property ListingTypeCodeType $ListingType
 * @property string $Location
 * @property BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $GalleryURL
 * @property string[] $PictureURL
 * @property string $PostalCode
 * @property string $PrimaryCategoryID
 * @property string $PrimaryCategoryName
 * @property int $Quantity
 * @property SimpleUserType $Seller
 * @property int $BidCount
 * @property AmountType $ConvertedCurrentPrice
 * @property AmountType $CurrentPrice
 * @property SimpleUserType $HighBidder
 * @property ListingStatusCodeType $ListingStatus
 * @property int $QuantitySold
 * @property bool $ReserveMet
 * @property string[] $ShipToLocations
 * @property SiteCodeType $Site
 * @property string $TimeLeft
 * @property string $Title
 * @property ShippingCostSummaryType $ShippingCostSummary
 * @property NameValueListArrayType $ItemSpecifics
 * @property int $HitCount
 * @property string $Subtitle
 * @property string $PrimaryCategoryIDPath
 * @property string $SecondaryCategoryID
 * @property string $SecondaryCategoryName
 * @property string $SecondaryCategoryIDPath
 * @property CharityType $Charity
 * @property StorefrontType $Storefront
 * @property CountryCodeType $Country
 * @property HalfItemConditionCodeType $HalfItemCondition
 * @property string $SellerComments
 * @property ReturnPolicyType $ReturnPolicy
 * @property AmountType $MinimumToBid
 * @property ProductIDType $ProductID
 * @property bool $AutoPay
 * @property BusinessSellerDetailsType $BusinessSellerDetails
 * @property SiteCodeType[] $PaymentAllowedSite
 * @property bool $IntegratedMerchantCreditCardEnabled
 * @property VariationsType $Variations
 * @property int $HandlingTime
 * @property int $LotSize
 * @property int $ConditionID
 * @property string $ConditionDisplayName
 * @property QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property int $QuantityThreshold
 * @property DiscountPriceInfoType $DiscountPriceInfo
 * @property string[] $ExcludeShipToLocation
 * @property bool $TopRatedListing
 * @property string $VhrUrl
 * @property bool $VhrAvailable
 * @property QuantityInfo $QuantityInfo
 * @property UnitInfoType $UnitInfo
 * @property bool $GlobalShipping
 * @property string $ConditionDescription
 * @property int $ItemCompatibilityCount
 * @property ItemCompatibilityListType $ItemCompatibilityList
 * @property int $QuantitySoldByPickupInStore
 * @property string $SKU
 * @property bool $eBayNowEligible
 * @property bool $eBayNowAvailable
 * @property bool $IgnoreQuantity
 * @property bool $AvailableForPickupDropOff
 * @property bool $EligibleForPickupDropOff
 */
class SimpleItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BestOfferEnabled'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferEnabled',
            ],
            'BuyItNowPrice'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyItNowPrice',
            ],
            'Description'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'ItemID'                              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'BuyItNowAvailable'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyItNowAvailable',
            ],
            'ConvertedBuyItNowPrice'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedBuyItNowPrice',
            ],
            'EndTime'                             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'StartTime'                           => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'ViewItemURLForNaturalSearch'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ViewItemURLForNaturalSearch',
            ],
            'ListingType'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingType',
            ],
            'Location'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Location',
            ],
            'PaymentMethods'                      => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentMethods',
            ],
            'GalleryURL'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryURL',
            ],
            'PictureURL'                          => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PictureURL',
            ],
            'PostalCode'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PostalCode',
            ],
            'PrimaryCategoryID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrimaryCategoryID',
            ],
            'PrimaryCategoryName'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrimaryCategoryName',
            ],
            'Quantity'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'Seller'                              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\SimpleUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Seller',
            ],
            'BidCount'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidCount',
            ],
            'ConvertedCurrentPrice'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedCurrentPrice',
            ],
            'CurrentPrice'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CurrentPrice',
            ],
            'HighBidder'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\SimpleUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HighBidder',
            ],
            'ListingStatus'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingStatus',
            ],
            'QuantitySold'                        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySold',
            ],
            'ReserveMet'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReserveMet',
            ],
            'ShipToLocations'                     => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShipToLocations',
            ],
            'Site'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Site',
            ],
            'TimeLeft'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TimeLeft',
            ],
            'Title'                               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Title',
            ],
            'ShippingCostSummary'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ShippingCostSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCostSummary',
            ],
            'ItemSpecifics'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSpecifics',
            ],
            'HitCount'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HitCount',
            ],
            'Subtitle'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Subtitle',
            ],
            'PrimaryCategoryIDPath'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrimaryCategoryIDPath',
            ],
            'SecondaryCategoryID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondaryCategoryID',
            ],
            'SecondaryCategoryName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondaryCategoryName',
            ],
            'SecondaryCategoryIDPath'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondaryCategoryIDPath',
            ],
            'Charity'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\CharityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Charity',
            ],
            'Storefront'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\StorefrontType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Storefront',
            ],
            'Country'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Country',
            ],
            'HalfItemCondition'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HalfItemCondition',
            ],
            'SellerComments'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerComments',
            ],
            'ReturnPolicy'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ReturnPolicyType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicy',
            ],
            'MinimumToBid'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumToBid',
            ],
            'ProductID'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ProductIDType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductID',
            ],
            'AutoPay'                             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutoPay',
            ],
            'BusinessSellerDetails'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\BusinessSellerDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BusinessSellerDetails',
            ],
            'PaymentAllowedSite'                  => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentAllowedSite',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
            ],
            'Variations'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\VariationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variations',
            ],
            'HandlingTime'                        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HandlingTime',
            ],
            'LotSize'                             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LotSize',
            ],
            'ConditionID'                         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionID',
            ],
            'ConditionDisplayName'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionDisplayName',
            ],
            'QuantityAvailableHint'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityAvailableHint',
            ],
            'QuantityThreshold'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityThreshold',
            ],
            'DiscountPriceInfo'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\DiscountPriceInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountPriceInfo',
            ],
            'ExcludeShipToLocation'               => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExcludeShipToLocation',
            ],
            'TopRatedListing'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TopRatedListing',
            ],
            'VhrUrl'                              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VhrUrl',
            ],
            'VhrAvailable'                        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VhrAvailable',
            ],
            'QuantityInfo'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\QuantityInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityInfo',
            ],
            'UnitInfo'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\UnitInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnitInfo',
            ],
            'GlobalShipping'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShipping',
            ],
            'ConditionDescription'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionDescription',
            ],
            'ItemCompatibilityCount'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityCount',
            ],
            'ItemCompatibilityList'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ItemCompatibilityListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityList',
            ],
            'QuantitySoldByPickupInStore'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySoldByPickupInStore',
            ],
            'SKU'                                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'eBayNowEligible'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayNowEligible',
            ],
            'eBayNowAvailable'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayNowAvailable',
            ],
            'IgnoreQuantity'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IgnoreQuantity',
            ],
            'AvailableForPickupDropOff'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AvailableForPickupDropOff',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
