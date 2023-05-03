<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ListingDurationDefinitionsType $ListingDurations
 * @property ShippingTermRequiredDefinitionType $ShippingTermsRequired
 * @property BestOfferEnabledDefinitionType $BestOfferEnabled
 * @property HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
 * @property ProPackEnabledDefinitionType $ProPackEnabled
 * @property ValuePackEnabledDefinitionType $ValuePackEnabled
 * @property ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
 * @property AdFormatEnabledDefinitionType $AdFormatEnabled
 * @property BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
 * @property BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
 * @property LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
 * @property LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
 * @property LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
 * @property LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
 * @property MinimumReservePriceDefinitionType $MinimumReservePrice
 * @property TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
 * @property SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
 * @property SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
 * @property SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
 * @property LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
 * @property LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
 * @property LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
 * @property ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
 * @property ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
 * @property ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
 * @property ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
 * @property ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
 * @property ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
 * @property ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
 * @property SafePaymentRequiredDefinitionType $SafePaymentRequired
 * @property ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
 * @property ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
 * @property PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
 * @property BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
 * @property BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
 * @property ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
 * @property CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
 * @property CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
 * @property CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
 * @property PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
 * @property BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
 * @property ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
 * @property INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
 * @property PayPalRequiredDefinitionType $PayPalRequired
 * @property EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
 * @property EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
 * @property EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
 * @property EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
 * @property EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
 * @property EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
 * @property EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
 * @property EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
 * @property EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
 * @property EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
 * @property EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
 * @property EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
 * @property EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
 * @property LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
 * @property LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
 * @property LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
 * @property LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
 * @property LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
 * @property LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
 * @property LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
 * @property LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
 * @property LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
 * @property LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
 * @property LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
 * @property LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
 * @property LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
 * @property LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
 * @property ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
 * @property ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
 * @property ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
 * @property ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
 * @property SpecialitySubscriptionDefinitionType $SpecialitySubscription
 * @property RegularSubscriptionDefinitionType $RegularSubscription
 * @property PremiumSubscriptionDefinitionType $PremiumSubscription
 * @property NonSubscriptionDefinitionType $NonSubscription
 * @property ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
 * @property HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
 * @property ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
 * @property RevisePriceAllowedDefinitionType $RevisePriceAllowed
 * @property StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
 * @property StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
 * @property PaymentMethodDefinitionType $PaymentMethod
 * @property Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
 * @property Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
 * @property Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
 * @property MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
 * @property MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
 * @property VariationsEnabledDefinitionType $VariationsEnabled
 * @property FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
 * @property FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
 * @property ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
 * @property MaxItemCompatibilityDefinitionType $MaxItemCompatibility
 * @property MinItemCompatibilityDefinitionType $MinItemCompatibility
 * @property ConditionEnabledDefinitionType $ConditionEnabled
 * @property ConditionValuesDefinitionType $ConditionValues
 * @property ValueCategoryDefinitionType $ValueCategory
 * @property ProductCreationEnabledDefinitionType $ProductCreationEnabled
 * @property EANEnabledDefinitionType $EANEnabled
 * @property ISBNEnabledDefinitionType $ISBNEnabled
 * @property UPCEnabledDefinitionType $UPCEnabled
 * @property CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
 * @property MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
 * @property ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
 * @property ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
 * @property ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
 * @property VINSupportedDefinitionType $VINSupported
 * @property VRMSupportedDefinitionType $VRMSupported
 * @property SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
 * @property DepositSupportedDefinitionType $DepositSupported
 * @property GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
 * @property AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
 * @property PickupDropOffEnabledDefinitionType $PickupDropOffEnabled
 * @property DigitalGoodDeliveryEnabledDefinitionType $DigitalGoodDeliveryEnabled
 * @property EpidSupportedDefinitionType $EpidSupported
 * @property KTypeSupportedDefinitionType $KTypeSupported
 * @property ProductRequiredEnabledDefinitionType $ProductRequiredEnabled
 */
class FeatureDefinitionsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ListingDurations'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingDurationDefinitionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingDurations',
            ],
            'ShippingTermsRequired'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingTermRequiredDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTermsRequired',
            ],
            'BestOfferEnabled'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferEnabled',
            ],
            'HomePageFeaturedEnabled'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\HomePageFeaturedEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HomePageFeaturedEnabled',
            ],
            'ProPackEnabled'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProPackEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProPackEnabled',
            ],
            'ValuePackEnabled'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ValuePackEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValuePackEnabled',
            ],
            'ProPackPlusEnabled'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProPackPlusEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProPackPlusEnabled',
            ],
            'AdFormatEnabled'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AdFormatEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdFormatEnabled',
            ],
            'BestOfferCounterEnabled'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferCounterEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferCounterEnabled',
            ],
            'BestOfferAutoDeclineEnabled'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferAutoDeclineEnabled',
            ],
            'LocalMarketSpecialitySubscription'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketSpecialitySubscription',
            ],
            'LocalMarketRegularSubscription'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketRegularSubscription',
            ],
            'LocalMarketPremiumSubscription'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPremiumSubscription',
            ],
            'LocalMarketNonSubscription'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketNonSubscription',
            ],
            'MinimumReservePrice'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MinimumReservePriceDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumReservePrice',
            ],
            'TransactionConfirmationRequestEnabled'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TCREnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionConfirmationRequestEnabled',
            ],
            'SellerContactDetailsEnabled'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerContactDetailsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerContactDetailsEnabled',
            ],
            'SkypeMeTransactionalEnabled'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SkypeMeTransactionalEnabled',
            ],
            'SkypeMeNonTransactionalEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SkypeMeNonTransactionalEnabled',
            ],
            'LocalListingDistancesRegular'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalListingDistancesRegularDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalListingDistancesRegular',
            ],
            'LocalListingDistancesSpecialty'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalListingDistancesSpecialty',
            ],
            'LocalListingDistancesNonSubscription'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalListingDistancesNonSubscription',
            ],
            'ClassifiedAdPaymentMethodEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPaymentMethodEnabled',
            ],
            'ClassifiedAdShippingMethodEnabled'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdShippingMethodEnabled',
            ],
            'ClassifiedAdBestOfferEnabled'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdBestOfferEnabled',
            ],
            'ClassifiedAdCounterOfferEnabled'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdCounterOfferEnabled',
            ],
            'ClassifiedAdAutoDeclineEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdAutoDeclineEnabled',
            ],
            'ClassifiedAdContactByPhoneEnabled'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByPhoneEnabled',
            ],
            'ClassifiedAdContactByEmailEnabled'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByEmailEnabled',
            ],
            'SafePaymentRequired'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SafePaymentRequiredDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SafePaymentRequired',
            ],
            'ClassifiedAdPayPerLeadEnabled'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPayPerLeadEnabled',
            ],
            'ItemSpecificsEnabled'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemSpecificsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSpecificsEnabled',
            ],
            'PaisaPayFullEscrowEnabled'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayFullEscrowEnabled',
            ],
            'BrandMPNIdentifierEnabled'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BrandMPNIdentifierEnabled',
            ],
            'BestOfferAutoAcceptEnabled'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferAutoAcceptEnabled',
            ],
            'ClassifiedAdAutoAcceptEnabled'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdAutoAcceptEnabled',
            ],
            'CrossBorderTradeNorthAmericaEnabled'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeNorthAmericaEnabled',
            ],
            'CrossBorderTradeGBEnabled'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeGBEnabled',
            ],
            'CrossBorderTradeAustraliaEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTradeAustraliaEnabled',
            ],
            'PayPalBuyerProtectionEnabled'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalBuyerProtectionEnabled',
            ],
            'BuyerGuaranteeEnabled'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerGuaranteeEnabled',
            ],
            'GalleryFeaturedDurations'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingEnhancementDurationDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryFeaturedDurations',
            ],
            'INEscrowWorkflowTimeline'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'INEscrowWorkflowTimeline',
            ],
            'PayPalRequired'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PayPalRequiredDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalRequired',
            ],
            'eBayMotorsProAdFormatEnabled'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAdFormatEnabled',
            ],
            'eBayMotorsProContactByPhoneEnabled'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByPhoneEnabled',
            ],
            'eBayMotorsProPhoneCount'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProPhoneCount',
            ],
            'eBayMotorsProContactByAddressEnabled'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByAddressEnabled',
            ],
            'eBayMotorsProStreetCount'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProStreetCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProStreetCount',
            ],
            'eBayMotorsProCompanyNameEnabled'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProCompanyNameEnabled',
            ],
            'eBayMotorsProContactByEmailEnabled'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProContactByEmailEnabled',
            ],
            'eBayMotorsProBestOfferEnabled'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProBestOfferEnabled',
            ],
            'eBayMotorsProAutoAcceptEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAutoAcceptEnabled',
            ],
            'eBayMotorsProAutoDeclineEnabled'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProAutoDeclineEnabled',
            ],
            'eBayMotorsProPaymentMethodCheckOutEnabled' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled',
            ],
            'eBayMotorsProShippingMethodEnabled'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProShippingMethodEnabled',
            ],
            'eBayMotorsProCounterOfferEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProCounterOfferEnabled',
            ],
            'eBayMotorsProSellerContactDetailsEnabled'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayMotorsProSellerContactDetailsEnabled',
            ],
            'LocalMarketAdFormatEnabled'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAdFormatEnabled',
            ],
            'LocalMarketContactByPhoneEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByPhoneEnabled',
            ],
            'LocalMarketPhoneCount'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketPhoneCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPhoneCount',
            ],
            'LocalMarketContactByAddressEnabled'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByAddressEnabled',
            ],
            'LocalMarketStreetCount'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketStreetCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketStreetCount',
            ],
            'LocalMarketCompanyNameEnabled'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketCompanyNameEnabled',
            ],
            'LocalMarketContactByEmailEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketContactByEmailEnabled',
            ],
            'LocalMarketBestOfferEnabled'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketBestOfferEnabled',
            ],
            'LocalMarketAutoAcceptEnabled'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAutoAcceptEnabled',
            ],
            'LocalMarketAutoDeclineEnabled'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketAutoDeclineEnabled',
            ],
            'LocalMarketPaymentMethodCheckOutEnabled'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled',
            ],
            'LocalMarketShippingMethodEnabled'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketShippingMethodEnabled',
            ],
            'LocalMarketCounterOfferEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketCounterOfferEnabled',
            ],
            'LocalMarketSellerContactDetailsEnabled'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalMarketSellerContactDetailsEnabled',
            ],
            'ClassifiedAdPhoneCount'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdPhoneCount',
            ],
            'ClassifiedAdContactByAddressEnabled'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdContactByAddressEnabled',
            ],
            'ClassifiedAdStreetCount'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdStreetCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdStreetCount',
            ],
            'ClassifiedAdCompanyNameEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdCompanyNameEnabled',
            ],
            'SpecialitySubscription'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SpecialitySubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SpecialitySubscription',
            ],
            'RegularSubscription'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RegularSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegularSubscription',
            ],
            'PremiumSubscription'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PremiumSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PremiumSubscription',
            ],
            'NonSubscription'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NonSubscriptionDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NonSubscription',
            ],
            'ReturnPolicyEnabled'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReturnPolicyEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicyEnabled',
            ],
            'HandlingTimeEnabled'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\HandlingTimeEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HandlingTimeEnabled',
            ],
            'ReviseQuantityAllowed'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReviseQuantityAllowedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReviseQuantityAllowed',
            ],
            'RevisePriceAllowed'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RevisePriceAllowedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RevisePriceAllowed',
            ],
            'StoreOwnerExtendedListingDurationsEnabled' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreOwnerExtendedListingDurationsEnabled',
            ],
            'StoreOwnerExtendedListingDurations'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreOwnerExtendedListingDurations',
            ],
            'PaymentMethod'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaymentMethodDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
            ],
            'Group1MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group1MaxFlatShippingCost',
            ],
            'Group2MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group2MaxFlatShippingCost',
            ],
            'Group3MaxFlatShippingCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Group3MaxFlatShippingCost',
            ],
            'MaxFlatShippingCostCBTExempt'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxFlatShippingCostCBTExempt',
            ],
            'MaxFlatShippingCost'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaxFlatShippingCostDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxFlatShippingCost',
            ],
            'VariationsEnabled'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VariationsEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationsEnabled',
            ],
            'FreeGalleryPlusEnabled'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreeGalleryPlusEnabled',
            ],
            'FreePicturePackEnabled'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FreePicturePackEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FreePicturePackEnabled',
            ],
            'ItemCompatibilityEnabled'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemCompatibilityEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCompatibilityEnabled',
            ],
            'MaxItemCompatibility'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaxItemCompatibilityDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxItemCompatibility',
            ],
            'MinItemCompatibility'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MinItemCompatibilityDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinItemCompatibility',
            ],
            'ConditionEnabled'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ConditionEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionEnabled',
            ],
            'ConditionValues'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ConditionValuesDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConditionValues',
            ],
            'ValueCategory'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ValueCategoryDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValueCategory',
            ],
            'ProductCreationEnabled'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProductCreationEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductCreationEnabled',
            ],
            'EANEnabled'                                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EANEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EANEnabled',
            ],
            'ISBNEnabled'                               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ISBNEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ISBNEnabled',
            ],
            'UPCEnabled'                                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UPCEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UPCEnabled',
            ],
            'CompatibleVehicleType'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CompatibleVehicleTypeDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CompatibleVehicleType',
            ],
            'MaxGranularFitmentCount'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaxGranularFitmentCountDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxGranularFitmentCount',
            ],
            'ShippingProfileCategoryGroup'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProfileCategoryGroupDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingProfileCategoryGroup',
            ],
            'PaymentProfileCategoryGroup'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProfileCategoryGroupDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentProfileCategoryGroup',
            ],
            'ReturnPolicyProfileCategoryGroup'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProfileCategoryGroupDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnPolicyProfileCategoryGroup',
            ],
            'VINSupported'                              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VINSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VINSupported',
            ],
            'VRMSupported'                              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VRMSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VRMSupported',
            ],
            'SellerProvidedTitleSupported'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerProvidedTitleSupported',
            ],
            'DepositSupported'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DepositSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositSupported',
            ],
            'GlobalShippingEnabled'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\GlobalShippingEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShippingEnabled',
            ],
            'AdditionalCompatibilityEnabled'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdditionalCompatibilityEnabled',
            ],
            'PickupDropOffEnabled'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PickupDropOffEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDropOffEnabled',
            ],
            'DigitalGoodDeliveryEnabled'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DigitalGoodDeliveryEnabledDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalGoodDeliveryEnabled',
            ],
            'EpidSupported'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EpidSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EpidSupported',
            ],
            'KTypeSupported'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\KTypeSupportedDefinitionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'KTypeSupported',
            ],
            'ProductRequiredEnabled'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ProductRequiredEnabledDefinitionType',
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
