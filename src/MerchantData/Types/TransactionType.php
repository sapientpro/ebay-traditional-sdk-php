<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\DepositTypeCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaidStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\TransactionPlatformCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $AmountPaid
 * @property AmountType $AdjustmentAmount
 * @property AmountType $ConvertedAdjustmentAmount
 * @property UserType $Buyer
 * @property ShippingDetailsType $ShippingDetails
 * @property AmountType $ConvertedAmountPaid
 * @property AmountType $ConvertedTransactionPrice
 * @property DateTime $CreatedDate
 * @property DepositTypeCodeType $DepositType
 * @property ItemType $Item
 * @property int $QuantityPurchased
 * @property TransactionStatusType $Status
 * @property string $TransactionID
 * @property AmountType $TransactionPrice
 * @property bool $BestOfferSale
 * @property int $VATPercent
 * @property ExternalTransactionType[] $ExternalTransaction
 * @property SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property ShippingServiceOptionsType $ShippingServiceSelected
 * @property PaidStatusCodeType $BuyerPaidStatus
 * @property PaidStatusCodeType $SellerPaidStatus
 * @property DateTime $PaidTime
 * @property DateTime $ShippedTime
 * @property AmountType $TotalPrice
 * @property FeedbackInfoType $FeedbackLeft
 * @property FeedbackInfoType $FeedbackReceived
 * @property OrderType $ContainingOrder
 * @property AmountType $FinalValueFee
 * @property ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property RefundArrayType $RefundArray
 * @property SiteCodeType $TransactionSiteID
 * @property TransactionPlatformCodeType $Platform
 * @property string $CartID
 * @property bool $SellerContactBuyerByEmail
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property AmountType $BuyerGuaranteePrice
 * @property VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property TaxesType $Taxes
 * @property bool $BundlePurchase
 * @property AmountType $ActualShippingCost
 * @property AmountType $ActualHandlingCost
 * @property string $OrderLineItemID
 * @property string $eBayPaymentID
 * @property PaymentHoldDetailType $PaymentHoldDetails
 * @property SellerDiscountsType $SellerDiscounts
 * @property string $CodiceFiscale
 * @property bool $IsMultiLegShipping
 * @property MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property DateTime $InvoiceSentTime
 * @property UnpaidItemType $UnpaidItem
 * @property bool $IntangibleItem
 * @property PaymentsInformationType $MonetaryDetails
 * @property PickupDetailsType $PickupDetails
 * @property PickupMethodSelectedType $PickupMethodSelected
 * @property AmountType $ShippingConvenienceCharge
 * @property string $LogisticsPlanType
 * @property BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $InventoryReservationID
 * @property string $ExtendedOrderID
 * @property bool $eBayPlusTransaction
 * @property GiftSummaryType $GiftSummary
 * @property DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property bool $Gift
 * @property bool $GuaranteedShipping
 */
class TransactionType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AmountPaid'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountPaid',
            ],
            'AdjustmentAmount'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
            ],
            'ConvertedAdjustmentAmount'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedAdjustmentAmount',
            ],
            'Buyer'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Buyer',
            ],
            'ShippingDetails'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
            ],
            'ConvertedAmountPaid'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedAmountPaid',
            ],
            'ConvertedTransactionPrice'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedTransactionPrice',
            ],
            'CreatedDate'                       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreatedDate',
            ],
            'DepositType'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositType',
            ],
            'Item'                              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Item',
            ],
            'QuantityPurchased'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityPurchased',
            ],
            'Status'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'TransactionID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'TransactionPrice'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionPrice',
            ],
            'BestOfferSale'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferSale',
            ],
            'VATPercent'                        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATPercent',
            ],
            'ExternalTransaction'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ExternalTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalTransaction',
            ],
            'SellingManagerProductDetails'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SellingManagerProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductDetails',
            ],
            'ShippingServiceSelected'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShippingServiceOptionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceSelected',
            ],
            'BuyerPaidStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPaidStatus',
            ],
            'SellerPaidStatus'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaidStatus',
            ],
            'PaidTime'                          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaidTime',
            ],
            'ShippedTime'                       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedTime',
            ],
            'TotalPrice'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalPrice',
            ],
            'FeedbackLeft'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FeedbackInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackLeft',
            ],
            'FeedbackReceived'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FeedbackInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackReceived',
            ],
            'ContainingOrder'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ContainingOrder',
            ],
            'FinalValueFee'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FinalValueFee',
            ],
            'ListingCheckoutRedirectPreference' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingCheckoutRedirectPreference',
            ],
            'RefundArray'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RefundArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundArray',
            ],
            'TransactionSiteID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionSiteID',
            ],
            'Platform'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Platform',
            ],
            'CartID'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CartID',
            ],
            'SellerContactBuyerByEmail'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerContactBuyerByEmail',
            ],
            'PayPalEmailAddress'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalEmailAddress',
            ],
            'PaisaPayID'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayID',
            ],
            'BuyerGuaranteePrice'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerGuaranteePrice',
            ],
            'Variation'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VariationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variation',
            ],
            'BuyerCheckoutMessage'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerCheckoutMessage',
            ],
            'Taxes'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TaxesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Taxes',
            ],
            'BundlePurchase'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BundlePurchase',
            ],
            'ActualShippingCost'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualShippingCost',
            ],
            'ActualHandlingCost'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualHandlingCost',
            ],
            'OrderLineItemID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
            ],
            'eBayPaymentID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPaymentID',
            ],
            'PaymentHoldDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PaymentHoldDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldDetails',
            ],
            'SellerDiscounts'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SellerDiscountsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerDiscounts',
            ],
            'CodiceFiscale'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CodiceFiscale',
            ],
            'IsMultiLegShipping'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IsMultiLegShipping',
            ],
            'MultiLegShippingDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MultiLegShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MultiLegShippingDetails',
            ],
            'InvoiceSentTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceSentTime',
            ],
            'UnpaidItem'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UnpaidItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnpaidItem',
            ],
            'IntangibleItem'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntangibleItem',
            ],
            'MonetaryDetails'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PaymentsInformationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MonetaryDetails',
            ],
            'PickupDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDetails',
            ],
            'PickupMethodSelected'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupMethodSelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupMethodSelected',
            ],
            'ShippingConvenienceCharge'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingConvenienceCharge',
            ],
            'LogisticsPlanType'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogisticsPlanType',
            ],
            'BuyerPackageEnclosures'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\BuyerPackageEnclosuresType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPackageEnclosures',
            ],
            'InventoryReservationID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InventoryReservationID',
            ],
            'ExtendedOrderID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtendedOrderID',
            ],
            'eBayPlusTransaction'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPlusTransaction',
            ],
            'GiftSummary'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\GiftSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GiftSummary',
            ],
            'DigitalDeliverySelected'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\DigitalDeliverySelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalDeliverySelected',
            ],
            'Gift'                              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Gift',
            ],
            'GuaranteedShipping'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GuaranteedShipping',
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
