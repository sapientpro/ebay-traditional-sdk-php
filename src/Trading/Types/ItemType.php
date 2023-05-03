<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerProtectionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CountryCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DescriptionReviseModeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\HitCounterCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\InventoryTrackingMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingEnhancementsCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingSubtypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\QuantityAvailableHintCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ReasonHideFromSearchCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ApplicationData
 * @property bool $AutoPay
 * @property PaymentDetailsType $PaymentDetails
 * @property BiddingDetailsType $BiddingDetails
 * @property bool $MotorsGermanySearchable
 * @property BuyerProtectionCodeType $BuyerProtection
 * @property AmountType $BuyItNowPrice
 * @property bool $CategoryMappingAllowed
 * @property CharityType $Charity
 * @property CountryCodeType $Country
 * @property CurrencyCodeType $Currency
 * @property string $Description
 * @property DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property ListingDetailsType $ListingDetails
 * @property ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property ListingEnhancementsCodeType[] $ListingEnhancement
 * @property ListingTypeCodeType $ListingType
 * @property string $Location
 * @property int $LotSize
 * @property BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property CategoryType $PrimaryCategory
 * @property ProductListingDetailsType $ProductListingDetails
 * @property int $Quantity
 * @property string $PrivateNotes
 * @property bool $RelistLink
 * @property AmountType $ReservePrice
 * @property ReviseStatusType $ReviseStatus
 * @property DateTime $ScheduleTime
 * @property CategoryType $SecondaryCategory
 * @property CategoryType $FreeAddedCategory
 * @property UserType $Seller
 * @property SellingStatusType $SellingStatus
 * @property ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property SiteCodeType $Site
 * @property AmountType $StartPrice
 * @property StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property int $WatchCount
 * @property int $HitCount
 * @property bool $DisableBuyerRequirements
 * @property BestOfferDetailsType $BestOfferDetails
 * @property bool $LocationDefaulted
 * @property bool $UseTaxTable
 * @property bool $BuyerResponsibleForShipping
 * @property string $eBayNotes
 * @property int $QuestionCount
 * @property bool $Relisted
 * @property int $QuantityAvailable
 * @property string $SKU
 * @property bool $CategoryBasedAttributesPrefill
 * @property string $PostalCode
 * @property bool $ShippingTermsInDescription
 * @property PictureDetailsType $PictureDetails
 * @property int $DispatchTimeMax
 * @property AddressType $SellerContactDetails
 * @property int $TotalQuestionCount
 * @property bool $ProxyItem
 * @property ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property int $LeadCount
 * @property int $NewLeadCount
 * @property NameValueListArrayType $ItemSpecifics
 * @property AmountType $ClassifiedAdPayPerLeadFee
 * @property BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property ListingSubtypeCodeType $ListingSubtype2
 * @property bool $MechanicalCheckAccepted
 * @property bool $UpdateSellerInfo
 * @property bool $UpdateReturnPolicy
 * @property ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property BusinessSellerDetailsType $BusinessSellerDetails
 * @property AmountType $BuyerGuaranteePrice
 * @property BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property ReturnPolicyType $ReturnPolicy
 * @property SiteCodeType[] $PaymentAllowedSite
 * @property InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property bool $IntegratedMerchantCreditCardEnabled
 * @property VariationsType $Variations
 * @property ItemCompatibilityListType $ItemCompatibilityList
 * @property int $ItemCompatibilityCount
 * @property int $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property int $QuantityThreshold
 * @property DiscountPriceInfoType $DiscountPriceInfo
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VRM
 * @property QuantityInfoType $QuantityInfo
 * @property SellerProfilesType $SellerProfiles
 * @property ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property ShipPackageDetailsType $ShippingPackageDetails
 * @property bool $TopRatedListing
 * @property QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property AmountType $FloorPrice
 * @property AmountType $CeilingPrice
 * @property bool $IsIntermediatedShippingEligible
 * @property UnitInfoType $UnitInfo
 * @property int $RelistParentID
 * @property string $ConditionDefinition
 * @property bool $HideFromSearch
 * @property ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property bool $IncludeRecommendations
 * @property PickupInStoreDetailsType $PickupInStoreDetails
 * @property bool $eBayNowEligible
 * @property bool $eBayNowAvailable
 * @property bool $IgnoreQuantity
 * @property bool $AvailableForPickupDropOff
 * @property bool $EligibleForPickupDropOff
 * @property bool $LiveAuction
 * @property DigitalGoodInfoType $DigitalGoodInfo
 * @property bool $eBayPlus
 * @property bool $eBayPlusEligible
 * @property bool $eMailDeliveryAvailable
 * @property bool $IsSecureDescription
 */
class ItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ApplicationData'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ApplicationData',
            ],
            'AutoPay'                             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutoPay',
            ],
            'PaymentDetails'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaymentDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentDetails',
            ],
            'BiddingDetails'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BiddingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BiddingDetails',
            ],
            'MotorsGermanySearchable'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MotorsGermanySearchable',
            ],
            'BuyerProtection'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerProtection',
            ],
            'BuyItNowPrice'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyItNowPrice',
            ],
            'CategoryMappingAllowed'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryMappingAllowed',
            ],
            'Charity'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CharityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Charity',
            ],
            'Country'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Country',
            ],
            'Currency'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Currency',
            ],
            'Description'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'DescriptionReviseMode'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DescriptionReviseMode',
            ],
            'HitCounter'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HitCounter',
            ],
            'ItemID'                              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'ListingDetails'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingDetails',
            ],
            'ListingDesigner'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingDesignerType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingDesigner',
            ],
            'ListingDuration'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingDuration',
            ],
            'ListingEnhancement'                  => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingEnhancement',
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
            'LotSize'                             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LotSize',
            ],
            'PaymentMethods'                      => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentMethods',
            ],
            'PayPalEmailAddress'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalEmailAddress',
            ],
            'PrimaryCategory'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrimaryCategory',
            ],
            'ProductListingDetails'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProductListingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductListingDetails',
            ],
            'Quantity'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'PrivateNotes'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrivateNotes',
            ],
            'RelistLink'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistLink',
            ],
            'ReservePrice'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReservePrice',
            ],
            'ReviseStatus'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReviseStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReviseStatus',
            ],
            'ScheduleTime'                        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ScheduleTime',
            ],
            'SecondaryCategory'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondaryCategory',
            ],
            'FreeAddedCategory'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreeAddedCategory',
            ],
            'Seller'                              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Seller',
            ],
            'SellingStatus'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingStatus',
            ],
            'ShippingDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
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
            'StartPrice'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartPrice',
            ],
            'Storefront'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StorefrontType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Storefront',
            ],
            'SubTitle'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SubTitle',
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
            'UUID'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UUID',
            ],
            'VATDetails'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VATDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATDetails',
            ],
            'SellerVacationNote'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerVacationNote',
            ],
            'WatchCount'                          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WatchCount',
            ],
            'HitCount'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HitCount',
            ],
            'DisableBuyerRequirements'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisableBuyerRequirements',
            ],
            'BestOfferDetails'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferDetails',
            ],
            'LocationDefaulted'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocationDefaulted',
            ],
            'UseTaxTable'                         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UseTaxTable',
            ],
            'BuyerResponsibleForShipping'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerResponsibleForShipping',
            ],
            'eBayNotes'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayNotes',
            ],
            'QuestionCount'                       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuestionCount',
            ],
            'Relisted'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Relisted',
            ],
            'QuantityAvailable'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityAvailable',
            ],
            'SKU'                                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'CategoryBasedAttributesPrefill'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryBasedAttributesPrefill',
            ],
            'PostalCode'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PostalCode',
            ],
            'ShippingTermsInDescription'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTermsInDescription',
            ],
            'PictureDetails'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PictureDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureDetails',
            ],
            'DispatchTimeMax'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DispatchTimeMax',
            ],
            'SellerContactDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerContactDetails',
            ],
            'TotalQuestionCount'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalQuestionCount',
            ],
            'ProxyItem'                           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProxyItem',
            ],
            'ExtendedSellerContactDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ExtendedContactDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtendedSellerContactDetails',
            ],
            'LeadCount'                           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LeadCount',
            ],
            'NewLeadCount'                        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NewLeadCount',
            ],
            'ItemSpecifics'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSpecifics',
            ],
            'ClassifiedAdPayPerLeadFee'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPayPerLeadFee',
            ],
            'ApplyBuyerProtection'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerProtectionDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ApplyBuyerProtection',
            ],
            'ListingSubtype2'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingSubtype2',
            ],
            'MechanicalCheckAccepted'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MechanicalCheckAccepted',
            ],
            'UpdateSellerInfo'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateSellerInfo',
            ],
            'UpdateReturnPolicy'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateReturnPolicy',
            ],
            'ItemPolicyViolation'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemPolicyViolationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemPolicyViolation',
            ],
            'CrossBorderTrade'                    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CrossBorderTrade',
            ],
            'BusinessSellerDetails'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BusinessSellerDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BusinessSellerDetails',
            ],
            'BuyerGuaranteePrice'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerGuaranteePrice',
            ],
            'BuyerRequirementDetails'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerRequirementDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerRequirementDetails',
            ],
            'ReturnPolicy'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReturnPolicyType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicy',
            ],
            'PaymentAllowedSite'                  => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentAllowedSite',
            ],
            'InventoryTrackingMethod'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InventoryTrackingMethod',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
            ],
            'Variations'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VariationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variations',
            ],
            'ItemCompatibilityList'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemCompatibilityListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityList',
            ],
            'ItemCompatibilityCount'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityCount',
            ],
            'ConditionID'                         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionID',
            ],
            'ConditionDescription'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionDescription',
            ],
            'ConditionDisplayName'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionDisplayName',
            ],
            'TaxCategory'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxCategory',
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
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DiscountPriceInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountPriceInfo',
            ],
            'SellerProvidedTitle'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerProvidedTitle',
            ],
            'VIN'                                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VIN',
            ],
            'VRM'                                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VRM',
            ],
            'QuantityInfo'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\QuantityInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityInfo',
            ],
            'SellerProfiles'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerProfilesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerProfiles',
            ],
            'ShippingServiceCostOverrideList'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingServiceCostOverrideListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCostOverrideList',
            ],
            'ShippingPackageDetails'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShipPackageDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingPackageDetails',
            ],
            'TopRatedListing'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TopRatedListing',
            ],
            'QuantityRestrictionPerBuyer'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\QuantityRestrictionPerBuyerInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityRestrictionPerBuyer',
            ],
            'FloorPrice'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FloorPrice',
            ],
            'CeilingPrice'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CeilingPrice',
            ],
            'IsIntermediatedShippingEligible'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IsIntermediatedShippingEligible',
            ],
            'UnitInfo'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UnitInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnitInfo',
            ],
            'RelistParentID'                      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistParentID',
            ],
            'ConditionDefinition'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionDefinition',
            ],
            'HideFromSearch'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HideFromSearch',
            ],
            'ReasonHideFromSearch'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReasonHideFromSearch',
            ],
            'IncludeRecommendations'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeRecommendations',
            ],
            'PickupInStoreDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PickupInStoreDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupInStoreDetails',
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
            'LiveAuction'                         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LiveAuction',
            ],
            'DigitalGoodInfo'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DigitalGoodInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalGoodInfo',
            ],
            'eBayPlus'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPlus',
            ],
            'eBayPlusEligible'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPlusEligible',
            ],
            'eMailDeliveryAvailable'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eMailDeliveryAvailable',
            ],
            'IsSecureDescription'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IsSecureDescription',
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