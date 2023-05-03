<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property bool $ShowBidderNoticePreferences
 * @property bool $ShowCombinedPaymentPreferences
 * @property bool $ShowSellerPaymentPreferences
 * @property bool $ShowEndOfAuctionEmailPreferences
 * @property bool $ShowSellerFavoriteItemPreferences
 * @property bool $ShowEmailShipmentTrackingNumberPreference
 * @property bool $ShowRequiredShipPhoneNumberPreference
 * @property bool $ShowSellerExcludeShipToLocationPreference
 * @property bool $ShowUnpaidItemAssistancePreference
 * @property bool $ShowPurchaseReminderEmailPreferences
 * @property bool $ShowUnpaidItemAssistanceExclusionList
 * @property bool $ShowSellerProfilePreferences
 * @property bool $ShowSellerReturnPreferences
 * @property bool $ShowGlobalShippingProgramPreference
 * @property bool $ShowDispatchCutoffTimePreferences
 * @property bool $ShowGlobalShippingProgramListingPreference
 * @property bool $ShowOverrideGSPServiceWithIntlServicePreference
 * @property bool $ShowPickupDropoffPreferences
 * @property bool $ShowOutOfStockControlPreference
 * @property bool $ShoweBayPLUSPreference
 */
class GetUserPreferencesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShowBidderNoticePreferences'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowBidderNoticePreferences',
            ],
            'ShowCombinedPaymentPreferences'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowCombinedPaymentPreferences',
            ],
            'ShowSellerPaymentPreferences'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowSellerPaymentPreferences',
            ],
            'ShowEndOfAuctionEmailPreferences'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowEndOfAuctionEmailPreferences',
            ],
            'ShowSellerFavoriteItemPreferences'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowSellerFavoriteItemPreferences',
            ],
            'ShowEmailShipmentTrackingNumberPreference'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowEmailShipmentTrackingNumberPreference',
            ],
            'ShowRequiredShipPhoneNumberPreference'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowRequiredShipPhoneNumberPreference',
            ],
            'ShowSellerExcludeShipToLocationPreference'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowSellerExcludeShipToLocationPreference',
            ],
            'ShowUnpaidItemAssistancePreference'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowUnpaidItemAssistancePreference',
            ],
            'ShowPurchaseReminderEmailPreferences'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowPurchaseReminderEmailPreferences',
            ],
            'ShowUnpaidItemAssistanceExclusionList'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowUnpaidItemAssistanceExclusionList',
            ],
            'ShowSellerProfilePreferences'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowSellerProfilePreferences',
            ],
            'ShowSellerReturnPreferences'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowSellerReturnPreferences',
            ],
            'ShowGlobalShippingProgramPreference'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowGlobalShippingProgramPreference',
            ],
            'ShowDispatchCutoffTimePreferences'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowDispatchCutoffTimePreferences',
            ],
            'ShowGlobalShippingProgramListingPreference'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowGlobalShippingProgramListingPreference',
            ],
            'ShowOverrideGSPServiceWithIntlServicePreference' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowOverrideGSPServiceWithIntlServicePreference',
            ],
            'ShowPickupDropoffPreferences'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowPickupDropoffPreferences',
            ],
            'ShowOutOfStockControlPreference'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShowOutOfStockControlPreference',
            ],
            'ShoweBayPLUSPreference'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShoweBayPLUSPreference',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetUserPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
