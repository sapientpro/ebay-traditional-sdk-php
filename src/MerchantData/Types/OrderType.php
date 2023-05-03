<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CancelStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\OrderStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentHoldStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\TradingRoleCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $OrderID
 * @property OrderStatusCodeType $OrderStatus
 * @property AmountType $AdjustmentAmount
 * @property AmountType $AmountPaid
 * @property AmountType $AmountSaved
 * @property CheckoutStatusType $CheckoutStatus
 * @property ShippingDetailsType $ShippingDetails
 * @property TradingRoleCodeType $CreatingUserRole
 * @property DateTime $CreatedTime
 * @property BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property AddressType $ShippingAddress
 * @property ShippingServiceOptionsType $ShippingServiceSelected
 * @property AmountType $Subtotal
 * @property AmountType $Total
 * @property ExternalTransactionType[] $ExternalTransaction
 * @property TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property DateTime $PaidTime
 * @property DateTime $ShippedTime
 * @property bool $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property PaymentHoldDetailType $PaymentHoldDetails
 * @property AmountType $RefundAmount
 * @property string $RefundStatus
 * @property RefundArrayType $RefundArray
 * @property bool $IsMultiLegShipping
 * @property MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property PaymentsInformationType $MonetaryDetails
 * @property PickupDetailsType $PickupDetails
 * @property PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property AmountType $ShippingConvenienceCharge
 * @property CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property TaxIdentifierType[] $BuyerTaxIdentifier
 * @property BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property bool $ContainseBayPlusTransaction
 */
class OrderType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OrderID'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderID',
            ],
            'OrderStatus'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderStatus',
            ],
            'AdjustmentAmount'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
            ],
            'AmountPaid'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountPaid',
            ],
            'AmountSaved'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountSaved',
            ],
            'CheckoutStatus'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CheckoutStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutStatus',
            ],
            'ShippingDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
            ],
            'CreatingUserRole'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreatingUserRole',
            ],
            'CreatedTime'                         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreatedTime',
            ],
            'PaymentMethods'                      => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentMethods',
            ],
            'SellerEmail'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerEmail',
            ],
            'ShippingAddress'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingAddress',
            ],
            'ShippingServiceSelected'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShippingServiceOptionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceSelected',
            ],
            'Subtotal'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Subtotal',
            ],
            'Total'                               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Total',
            ],
            'ExternalTransaction'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ExternalTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalTransaction',
            ],
            'TransactionArray'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionArray',
            ],
            'BuyerUserID'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerUserID',
            ],
            'PaidTime'                            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaidTime',
            ],
            'ShippedTime'                         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedTime',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
            ],
            'BuyerCheckoutMessage'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerCheckoutMessage',
            ],
            'EIASToken'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EIASToken',
            ],
            'PaymentHoldStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldStatus',
            ],
            'PaymentHoldDetails'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PaymentHoldDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldDetails',
            ],
            'RefundAmount'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundAmount',
            ],
            'RefundStatus'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundStatus',
            ],
            'RefundArray'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RefundArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundArray',
            ],
            'IsMultiLegShipping'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IsMultiLegShipping',
            ],
            'MultiLegShippingDetails'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MultiLegShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MultiLegShippingDetails',
            ],
            'MonetaryDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PaymentsInformationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MonetaryDetails',
            ],
            'PickupDetails'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDetails',
            ],
            'PickupMethodSelected'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupMethodSelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupMethodSelected',
            ],
            'SellerUserID'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerUserID',
            ],
            'SellerEIASToken'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerEIASToken',
            ],
            'CancelReason'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CancelReason',
            ],
            'CancelStatus'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CancelStatus',
            ],
            'CancelReasonDetails'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CancelReasonDetails',
            ],
            'ShippingConvenienceCharge'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingConvenienceCharge',
            ],
            'CancelDetail'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CancelDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CancelDetail',
            ],
            'LogisticsPlanType'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogisticsPlanType',
            ],
            'BuyerTaxIdentifier'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TaxIdentifierType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'BuyerTaxIdentifier',
            ],
            'BuyerPackageEnclosures'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\BuyerPackageEnclosuresType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPackageEnclosures',
            ],
            'ExtendedOrderID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtendedOrderID',
            ],
            'ContainseBayPlusTransaction'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ContainseBayPlusTransaction',
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
