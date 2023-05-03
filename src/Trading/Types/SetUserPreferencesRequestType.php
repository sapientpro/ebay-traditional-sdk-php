<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property BidderNoticePreferencesType $BidderNoticePreferences
 * @property CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property bool $EmailShipmentTrackingNumberPreference
 * @property bool $RequiredShipPhoneNumberPreference
 * @property UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property bool $GlobalShippingProgramListingPreference
 * @property bool $OverrideGSPserviceWithIntlService
 * @property bool $OutOfStockControlPreference
 */
class SetUserPreferencesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BidderNoticePreferences'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BidderNoticePreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidderNoticePreferences',
            ],
            'CombinedPaymentPreferences'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CombinedPaymentPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CombinedPaymentPreferences',
            ],
            'SellerPaymentPreferences'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerPaymentPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaymentPreferences',
            ],
            'SellerFavoriteItemPreferences'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerFavoriteItemPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerFavoriteItemPreferences',
            ],
            'EndOfAuctionEmailPreferences'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\EndOfAuctionEmailPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndOfAuctionEmailPreferences',
            ],
            'EmailShipmentTrackingNumberPreference'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EmailShipmentTrackingNumberPreference',
            ],
            'RequiredShipPhoneNumberPreference'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RequiredShipPhoneNumberPreference',
            ],
            'UnpaidItemAssistancePreferences'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UnpaidItemAssistancePreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnpaidItemAssistancePreferences',
            ],
            'PurchaseReminderEmailPreferences'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PurchaseReminderEmailPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PurchaseReminderEmailPreferences',
            ],
            'DispatchCutoffTimePreference'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DispatchCutoffTimePreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DispatchCutoffTimePreference',
            ],
            'GlobalShippingProgramListingPreference' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShippingProgramListingPreference',
            ],
            'OverrideGSPserviceWithIntlService'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OverrideGSPserviceWithIntlService',
            ],
            'OutOfStockControlPreference'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OutOfStockControlPreference',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetUserPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
