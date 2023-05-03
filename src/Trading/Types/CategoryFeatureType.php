<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\AdFormatEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ConditionEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\GeographicExposureCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\INEscrowWorkflowTimelineCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemCompatibilityEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemSpecificsEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProductCreationEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProductIdentiferEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProductRequiredEnabledCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProfileCategoryGroupCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $CategoryID
 * @property ListingDurationReferenceType[] $ListingDuration
 * @property bool $ShippingTermsRequired
 * @property bool $BestOfferEnabled
 * @property bool $UserConsentRequired
 * @property bool $HomePageFeaturedEnabled
 * @property bool $ProPackEnabled
 * @property bool $ValuePackEnabled
 * @property bool $ProPackPlusEnabled
 * @property AdFormatEnabledCodeType $AdFormatEnabled
 * @property bool $BestOfferCounterEnabled
 * @property bool $BestOfferAutoDeclineEnabled
 * @property bool $LocalMarketSpecialitySubscription
 * @property bool $LocalMarketRegularSubscription
 * @property bool $LocalMarketPremiumSubscription
 * @property bool $LocalMarketNonSubscription
 * @property float $MinimumReservePrice
 * @property bool $SellerContactDetailsEnabled
 * @property bool $TransactionConfirmationRequestEnabled
 * @property ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
 * @property bool $ClassifiedAdShippingMethodEnabled
 * @property ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
 * @property bool $ClassifiedAdCounterOfferEnabled
 * @property bool $ClassifiedAdAutoDeclineEnabled
 * @property bool $ClassifiedAdContactByPhoneEnabled
 * @property bool $ClassifiedAdContactByEmailEnabled
 * @property bool $SafePaymentRequired
 * @property bool $ClassifiedAdPayPerLeadEnabled
 * @property ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
 * @property bool $PaisaPayFullEscrowEnabled
 * @property bool $BrandMPNIdentifierEnabled
 * @property bool $ClassifiedAdAutoAcceptEnabled
 * @property bool $BestOfferAutoAcceptEnabled
 * @property bool $CrossBorderTradeNorthAmericaEnabled
 * @property bool $CrossBorderTradeGBEnabled
 * @property bool $CrossBorderTradeAustraliaEnabled
 * @property bool $PayPalBuyerProtectionEnabled
 * @property bool $BuyerGuaranteeEnabled
 * @property ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
 * @property bool $PayPalRequired
 * @property AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
 * @property bool $eBayMotorsProContactByPhoneEnabled
 * @property int $eBayMotorsProPhoneCount
 * @property bool $eBayMotorsProContactByAddressEnabled
 * @property int $eBayMotorsProStreetCount
 * @property bool $eBayMotorsProCompanyNameEnabled
 * @property bool $eBayMotorsProContactByEmailEnabled
 * @property ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
 * @property bool $eBayMotorsProAutoAcceptEnabled
 * @property bool $eBayMotorsProAutoDeclineEnabled
 * @property ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property bool $eBayMotorsProShippingMethodEnabled
 * @property bool $eBayMotorsProCounterOfferEnabled
 * @property bool $eBayMotorsProSellerContactDetailsEnabled
 * @property AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
 * @property bool $LocalMarketContactByPhoneEnabled
 * @property int $LocalMarketPhoneCount
 * @property bool $LocalMarketContactByAddressEnabled
 * @property int $LocalMarketStreetCount
 * @property bool $LocalMarketCompanyNameEnabled
 * @property bool $LocalMarketContactByEmailEnabled
 * @property ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
 * @property bool $LocalMarketAutoAcceptEnabled
 * @property bool $LocalMarketAutoDeclineEnabled
 * @property ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
 * @property bool $LocalMarketShippingMethodEnabled
 * @property bool $LocalMarketCounterOfferEnabled
 * @property bool $LocalMarketSellerContactDetailsEnabled
 * @property int $ClassifiedAdPhoneCount
 * @property bool $ClassifiedAdContactByAddressEnabled
 * @property int $ClassifiedAdStreetCount
 * @property bool $ClassifiedAdCompanyNameEnabled
 * @property GeographicExposureCodeType $SpecialitySubscription
 * @property GeographicExposureCodeType $RegularSubscription
 * @property GeographicExposureCodeType $PremiumSubscription
 * @property GeographicExposureCodeType $NonSubscription
 * @property INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
 * @property bool $ReviseQuantityAllowed
 * @property bool $RevisePriceAllowed
 * @property bool $StoreOwnerExtendedListingDurationsEnabled
 * @property StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
 * @property bool $ReturnPolicyEnabled
 * @property bool $HandlingTimeEnabled
 * @property AmountType $MaxFlatShippingCost
 * @property AmountType $Group1MaxFlatShippingCost
 * @property AmountType $Group2MaxFlatShippingCost
 * @property AmountType $Group3MaxFlatShippingCost
 * @property BuyerPaymentMethodCodeType[] $PaymentMethod
 * @property bool $VariationsEnabled
 * @property bool $FreeGalleryPlusEnabled
 * @property bool $FreePicturePackEnabled
 * @property ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
 * @property int $MinItemCompatibility
 * @property int $MaxItemCompatibility
 * @property ConditionEnabledCodeType $ConditionEnabled
 * @property ConditionValuesType $ConditionValues
 * @property bool $ValueCategory
 * @property ProductCreationEnabledCodeType $ProductCreationEnabled
 * @property ProductIdentiferEnabledCodeType $EANEnabled
 * @property ProductIdentiferEnabledCodeType $ISBNEnabled
 * @property ProductIdentiferEnabledCodeType $UPCEnabled
 * @property int $MaxGranularFitmentCount
 * @property string $CompatibleVehicleType
 * @property ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
 * @property ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
 * @property ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
 * @property bool $VINSupported
 * @property bool $VRMSupported
 * @property bool $SellerProvidedTitleSupported
 * @property bool $DepositSupported
 * @property bool $GlobalShippingEnabled
 * @property bool $AdditionalCompatibilityEnabled
 * @property bool $PickupDropOffEnabled
 * @property bool $DigitalGoodDeliveryEnabled
 * @property bool $EpidSupported
 * @property bool $KTypeSupported
 * @property ProductRequiredEnabledCodeType $ProductRequiredEnabled
 */
class CategoryFeatureType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CategoryID'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'ListingDuration'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingDurationReferenceType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingDuration',
            ],
            'ShippingTermsRequired'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTermsRequired',
            ],
            'BestOfferEnabled'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferEnabled',
            ],
            'UserConsentRequired'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserConsentRequired',
            ],
            'HomePageFeaturedEnabled'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HomePageFeaturedEnabled',
            ],
            'ProPackEnabled'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProPackEnabled',
            ],
            'ValuePackEnabled'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValuePackEnabled',
            ],
            'ProPackPlusEnabled'                        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProPackPlusEnabled',
            ],
            'AdFormatEnabled'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdFormatEnabled',
            ],
            'BestOfferCounterEnabled'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferCounterEnabled',
            ],
            'BestOfferAutoDeclineEnabled'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferAutoDeclineEnabled',
            ],
            'LocalMarketSpecialitySubscription'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketSpecialitySubscription',
            ],
            'LocalMarketRegularSubscription'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketRegularSubscription',
            ],
            'LocalMarketPremiumSubscription'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPremiumSubscription',
            ],
            'LocalMarketNonSubscription'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketNonSubscription',
            ],
            'MinimumReservePrice'                       => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumReservePrice',
            ],
            'SellerContactDetailsEnabled'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerContactDetailsEnabled',
            ],
            'TransactionConfirmationRequestEnabled'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionConfirmationRequestEnabled',
            ],
            'ClassifiedAdPaymentMethodEnabled'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPaymentMethodEnabled',
            ],
            'ClassifiedAdShippingMethodEnabled'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdShippingMethodEnabled',
            ],
            'ClassifiedAdBestOfferEnabled'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdBestOfferEnabled',
            ],
            'ClassifiedAdCounterOfferEnabled'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdCounterOfferEnabled',
            ],
            'ClassifiedAdAutoDeclineEnabled'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdAutoDeclineEnabled',
            ],
            'ClassifiedAdContactByPhoneEnabled'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByPhoneEnabled',
            ],
            'ClassifiedAdContactByEmailEnabled'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByEmailEnabled',
            ],
            'SafePaymentRequired'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SafePaymentRequired',
            ],
            'ClassifiedAdPayPerLeadEnabled'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPayPerLeadEnabled',
            ],
            'ItemSpecificsEnabled'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSpecificsEnabled',
            ],
            'PaisaPayFullEscrowEnabled'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayFullEscrowEnabled',
            ],
            'BrandMPNIdentifierEnabled'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BrandMPNIdentifierEnabled',
            ],
            'ClassifiedAdAutoAcceptEnabled'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdAutoAcceptEnabled',
            ],
            'BestOfferAutoAcceptEnabled'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferAutoAcceptEnabled',
            ],
            'CrossBorderTradeNorthAmericaEnabled'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeNorthAmericaEnabled',
            ],
            'CrossBorderTradeGBEnabled'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeGBEnabled',
            ],
            'CrossBorderTradeAustraliaEnabled'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeAustraliaEnabled',
            ],
            'PayPalBuyerProtectionEnabled'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalBuyerProtectionEnabled',
            ],
            'BuyerGuaranteeEnabled'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerGuaranteeEnabled',
            ],
            'GalleryFeaturedDurations'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingEnhancementDurationReferenceType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryFeaturedDurations',
            ],
            'PayPalRequired'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalRequired',
            ],
            'eBayMotorsProAdFormatEnabled'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAdFormatEnabled',
            ],
            'eBayMotorsProContactByPhoneEnabled'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByPhoneEnabled',
            ],
            'eBayMotorsProPhoneCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProPhoneCount',
            ],
            'eBayMotorsProContactByAddressEnabled'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByAddressEnabled',
            ],
            'eBayMotorsProStreetCount'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProStreetCount',
            ],
            'eBayMotorsProCompanyNameEnabled'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProCompanyNameEnabled',
            ],
            'eBayMotorsProContactByEmailEnabled'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByEmailEnabled',
            ],
            'eBayMotorsProBestOfferEnabled'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProBestOfferEnabled',
            ],
            'eBayMotorsProAutoAcceptEnabled'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAutoAcceptEnabled',
            ],
            'eBayMotorsProAutoDeclineEnabled'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAutoDeclineEnabled',
            ],
            'eBayMotorsProPaymentMethodCheckOutEnabled' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled',
            ],
            'eBayMotorsProShippingMethodEnabled'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProShippingMethodEnabled',
            ],
            'eBayMotorsProCounterOfferEnabled'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProCounterOfferEnabled',
            ],
            'eBayMotorsProSellerContactDetailsEnabled'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProSellerContactDetailsEnabled',
            ],
            'LocalMarketAdFormatEnabled'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAdFormatEnabled',
            ],
            'LocalMarketContactByPhoneEnabled'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByPhoneEnabled',
            ],
            'LocalMarketPhoneCount'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPhoneCount',
            ],
            'LocalMarketContactByAddressEnabled'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByAddressEnabled',
            ],
            'LocalMarketStreetCount'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketStreetCount',
            ],
            'LocalMarketCompanyNameEnabled'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketCompanyNameEnabled',
            ],
            'LocalMarketContactByEmailEnabled'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByEmailEnabled',
            ],
            'LocalMarketBestOfferEnabled'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketBestOfferEnabled',
            ],
            'LocalMarketAutoAcceptEnabled'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAutoAcceptEnabled',
            ],
            'LocalMarketAutoDeclineEnabled'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAutoDeclineEnabled',
            ],
            'LocalMarketPaymentMethodCheckOutEnabled'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled',
            ],
            'LocalMarketShippingMethodEnabled'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketShippingMethodEnabled',
            ],
            'LocalMarketCounterOfferEnabled'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketCounterOfferEnabled',
            ],
            'LocalMarketSellerContactDetailsEnabled'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketSellerContactDetailsEnabled',
            ],
            'ClassifiedAdPhoneCount'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPhoneCount',
            ],
            'ClassifiedAdContactByAddressEnabled'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByAddressEnabled',
            ],
            'ClassifiedAdStreetCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdStreetCount',
            ],
            'ClassifiedAdCompanyNameEnabled'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdCompanyNameEnabled',
            ],
            'SpecialitySubscription'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SpecialitySubscription',
            ],
            'RegularSubscription'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegularSubscription',
            ],
            'PremiumSubscription'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PremiumSubscription',
            ],
            'NonSubscription'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NonSubscription',
            ],
            'INEscrowWorkflowTimeline'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'INEscrowWorkflowTimeline',
            ],
            'ReviseQuantityAllowed'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReviseQuantityAllowed',
            ],
            'RevisePriceAllowed'                        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RevisePriceAllowed',
            ],
            'StoreOwnerExtendedListingDurationsEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreOwnerExtendedListingDurationsEnabled',
            ],
            'StoreOwnerExtendedListingDurations'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreOwnerExtendedListingDurationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreOwnerExtendedListingDurations',
            ],
            'ReturnPolicyEnabled'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicyEnabled',
            ],
            'HandlingTimeEnabled'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HandlingTimeEnabled',
            ],
            'MaxFlatShippingCost'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxFlatShippingCost',
            ],
            'Group1MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group1MaxFlatShippingCost',
            ],
            'Group2MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group2MaxFlatShippingCost',
            ],
            'Group3MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group3MaxFlatShippingCost',
            ],
            'PaymentMethod'                             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
            ],
            'VariationsEnabled'                         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationsEnabled',
            ],
            'FreeGalleryPlusEnabled'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreeGalleryPlusEnabled',
            ],
            'FreePicturePackEnabled'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreePicturePackEnabled',
            ],
            'ItemCompatibilityEnabled'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityEnabled',
            ],
            'MinItemCompatibility'                      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinItemCompatibility',
            ],
            'MaxItemCompatibility'                      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxItemCompatibility',
            ],
            'ConditionEnabled'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionEnabled',
            ],
            'ConditionValues'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ConditionValuesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionValues',
            ],
            'ValueCategory'                             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValueCategory',
            ],
            'ProductCreationEnabled'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductCreationEnabled',
            ],
            'EANEnabled'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EANEnabled',
            ],
            'ISBNEnabled'                               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ISBNEnabled',
            ],
            'UPCEnabled'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UPCEnabled',
            ],
            'MaxGranularFitmentCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxGranularFitmentCount',
            ],
            'CompatibleVehicleType'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CompatibleVehicleType',
            ],
            'ShippingProfileCategoryGroup'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingProfileCategoryGroup',
            ],
            'PaymentProfileCategoryGroup'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentProfileCategoryGroup',
            ],
            'ReturnPolicyProfileCategoryGroup'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicyProfileCategoryGroup',
            ],
            'VINSupported'                              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VINSupported',
            ],
            'VRMSupported'                              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VRMSupported',
            ],
            'SellerProvidedTitleSupported'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerProvidedTitleSupported',
            ],
            'DepositSupported'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositSupported',
            ],
            'GlobalShippingEnabled'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShippingEnabled',
            ],
            'AdditionalCompatibilityEnabled'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdditionalCompatibilityEnabled',
            ],
            'PickupDropOffEnabled'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDropOffEnabled',
            ],
            'DigitalGoodDeliveryEnabled'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalGoodDeliveryEnabled',
            ],
            'EpidSupported'                             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EpidSupported',
            ],
            'KTypeSupported'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'KTypeSupported',
            ],
            'ProductRequiredEnabled'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductRequiredEnabled',
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
