<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\UnpaidItemStatusTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
 * @property AddressType $ShippingAddress
 * @property ShippingDetailsType $ShippingDetails
 * @property AmountType $CashOnDeliveryCost
 * @property AmountType $TotalAmount
 * @property int $TotalQuantity
 * @property AmountType $ItemCost
 * @property VATRateType[] $VATRate
 * @property AmountType $NetInsuranceFee
 * @property AmountType $VATInsuranceFee
 * @property AmountType $VATShippingFee
 * @property AmountType $NetShippingFee
 * @property AmountType $NetTotalAmount
 * @property AmountType $VATTotalAmount
 * @property AmountType $ActualShippingCost
 * @property AmountType $AdjustmentAmount
 * @property string $NotesToBuyer
 * @property string $NotesFromBuyer
 * @property string $NotesToSeller
 * @property SellingManagerOrderStatusType $OrderStatus
 * @property UnpaidItemStatusTypeCodeType $UnpaidItemStatus
 * @property AmountType $SalePrice
 * @property int $EmailsSent
 * @property int $DaysSinceSale
 * @property string $BuyerID
 * @property string $BuyerEmail
 * @property int $SaleRecordID
 * @property DateTime $CreationTime
 */
class SellingManagerSoldOrderType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SellingManagerSoldTransaction' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerSoldTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SellingManagerSoldTransaction',
            ],
            'ShippingAddress'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingAddress',
            ],
            'ShippingDetails'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
            ],
            'CashOnDeliveryCost'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CashOnDeliveryCost',
            ],
            'TotalAmount'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalAmount',
            ],
            'TotalQuantity'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalQuantity',
            ],
            'ItemCost'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCost',
            ],
            'VATRate'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VATRateType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VATRate',
            ],
            'NetInsuranceFee'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NetInsuranceFee',
            ],
            'VATInsuranceFee'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATInsuranceFee',
            ],
            'VATShippingFee'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATShippingFee',
            ],
            'NetShippingFee'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NetShippingFee',
            ],
            'NetTotalAmount'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NetTotalAmount',
            ],
            'VATTotalAmount'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATTotalAmount',
            ],
            'ActualShippingCost'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualShippingCost',
            ],
            'AdjustmentAmount'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
            ],
            'NotesToBuyer'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotesToBuyer',
            ],
            'NotesFromBuyer'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotesFromBuyer',
            ],
            'NotesToSeller'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotesToSeller',
            ],
            'OrderStatus'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerOrderStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderStatus',
            ],
            'UnpaidItemStatus'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnpaidItemStatus',
            ],
            'SalePrice'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalePrice',
            ],
            'EmailsSent'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EmailsSent',
            ],
            'DaysSinceSale'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DaysSinceSale',
            ],
            'BuyerID'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerID',
            ],
            'BuyerEmail'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerEmail',
            ],
            'SaleRecordID'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleRecordID',
            ],
            'CreationTime'                  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreationTime',
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
