<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CompleteStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\RCSPaymentStatusCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property AmountType $AmountPaid
 * @property BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property CompleteStatusCodeType $CheckoutStatus
 * @property string $ShippingService
 * @property bool $ShippingIncludedInTax
 * @property RCSPaymentStatusCodeType $PaymentStatus
 * @property AmountType $AdjustmentAmount
 * @property string $BuyerID
 * @property AmountType $SalesTax
 * @property AmountType $ShippingCost
 * @property string $EncryptedID
 * @property ExternalTransactionType $ExternalTransaction
 * @property string $MultipleSellerPaymentID
 * @property AmountType $CODCost
 * @property string $OrderLineItemID
 */
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'TransactionID'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'OrderID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderID',
            ],
            'AmountPaid'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountPaid',
            ],
            'PaymentMethodUsed'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethodUsed',
            ],
            'CheckoutStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutStatus',
            ],
            'ShippingService'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingService',
            ],
            'ShippingIncludedInTax'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingIncludedInTax',
            ],
            'PaymentStatus'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentStatus',
            ],
            'AdjustmentAmount'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
            ],
            'BuyerID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerID',
            ],
            'SalesTax'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalesTax',
            ],
            'ShippingCost'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCost',
            ],
            'EncryptedID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EncryptedID',
            ],
            'ExternalTransaction'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ExternalTransactionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalTransaction',
            ],
            'MultipleSellerPaymentID' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MultipleSellerPaymentID',
            ],
            'CODCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CODCost',
            ],
            'OrderLineItemID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseCheckoutStatusRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
