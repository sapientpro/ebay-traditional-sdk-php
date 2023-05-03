<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DepositTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PaidStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\TransactionPlatformCodeType;
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
 * @property SiteCodeType $TransactionSiteID
 * @property TransactionPlatformCodeType $Platform
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property AmountType $BuyerGuaranteePrice
 * @property VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property AmountType $TotalTransactionPrice
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
 * @property bool $GuaranteedDelivery
 */
class TransactionType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AmountPaid'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountPaid',
            ],
            'AdjustmentAmount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
            ],
            'ConvertedAdjustmentAmount'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedAdjustmentAmount',
            ],
            'Buyer'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Buyer',
            ],
            'ShippingDetails'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
            ],
            'ConvertedAmountPaid'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedAmountPaid',
            ],
            'ConvertedTransactionPrice'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedTransactionPrice',
            ],
            'CreatedDate'                  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreatedDate',
            ],
            'DepositType'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositType',
            ],
            'Item'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Item',
            ],
            'QuantityPurchased'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityPurchased',
            ],
            'Status'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TransactionStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'TransactionID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'TransactionPrice'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionPrice',
            ],
            'BestOfferSale'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferSale',
            ],
            'VATPercent'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATPercent',
            ],
            'ExternalTransaction'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ExternalTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalTransaction',
            ],
            'SellingManagerProductDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductDetails',
            ],
            'ShippingServiceSelected'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingServiceOptionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceSelected',
            ],
            'BuyerPaidStatus'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPaidStatus',
            ],
            'SellerPaidStatus'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaidStatus',
            ],
            'PaidTime'                     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaidTime',
            ],
            'ShippedTime'                  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedTime',
            ],
            'TotalPrice'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalPrice',
            ],
            'FeedbackLeft'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackLeft',
            ],
            'FeedbackReceived'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackReceived',
            ],
            'ContainingOrder'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\OrderType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ContainingOrder',
            ],
            'FinalValueFee'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FinalValueFee',
            ],
            'TransactionSiteID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionSiteID',
            ],
            'Platform'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Platform',
            ],
            'PayPalEmailAddress'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalEmailAddress',
            ],
            'PaisaPayID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayID',
            ],
            'BuyerGuaranteePrice'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerGuaranteePrice',
            ],
            'Variation'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VariationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variation',
            ],
            'BuyerCheckoutMessage'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerCheckoutMessage',
            ],
            'TotalTransactionPrice'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalTransactionPrice',
            ],
            'Taxes'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TaxesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Taxes',
            ],
            'BundlePurchase'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BundlePurchase',
            ],
            'ActualShippingCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualShippingCost',
            ],
            'ActualHandlingCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualHandlingCost',
            ],
            'OrderLineItemID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
            ],
            'eBayPaymentID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPaymentID',
            ],
            'PaymentHoldDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaymentHoldDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldDetails',
            ],
            'SellerDiscounts'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerDiscountsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerDiscounts',
            ],
            'CodiceFiscale'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CodiceFiscale',
            ],
            'IsMultiLegShipping'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IsMultiLegShipping',
            ],
            'MultiLegShippingDetails'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MultiLegShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MultiLegShippingDetails',
            ],
            'InvoiceSentTime'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceSentTime',
            ],
            'UnpaidItem'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UnpaidItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnpaidItem',
            ],
            'IntangibleItem'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntangibleItem',
            ],
            'MonetaryDetails'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaymentsInformationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MonetaryDetails',
            ],
            'PickupDetails'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PickupDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDetails',
            ],
            'PickupMethodSelected'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PickupMethodSelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupMethodSelected',
            ],
            'ShippingConvenienceCharge'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingConvenienceCharge',
            ],
            'LogisticsPlanType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogisticsPlanType',
            ],
            'BuyerPackageEnclosures'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerPackageEnclosuresType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPackageEnclosures',
            ],
            'InventoryReservationID'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InventoryReservationID',
            ],
            'ExtendedOrderID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtendedOrderID',
            ],
            'eBayPlusTransaction'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPlusTransaction',
            ],
            'GiftSummary'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\GiftSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GiftSummary',
            ],
            'DigitalDeliverySelected'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DigitalDeliverySelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalDeliverySelected',
            ],
            'Gift'                         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Gift',
            ],
            'GuaranteedShipping'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GuaranteedShipping',
            ],
            'GuaranteedDelivery'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GuaranteedDelivery',
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
