<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $OrderLineItemID
 * @property DateTime $TransactionTime
 * @property DateTime $OriginalChargeTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property string $SerialNumber
 * @property string $SKU
 * @property string $GlobalCategoryDescription
 * @property string $SiteDescription
 * @property int $QuantitySold
 * @property AmountType $SalePrice
 * @property AmountType $TaxAmount
 * @property AmountType $ShippingCost
 * @property AmountType $TotalCost
 * @property DateTime $PaymentClearedTime
 * @property AmountType $InsuranceCost
 * @property int $ListingSiteID
 * @property DateTime $SaleTime
 * @property string $Memo
 * @property string $SecondDescription
 * @property string $FeeDescription
 * @property AmountType $FeeAmount
 * @property int $SellingManagerSaleRecordID
 * @property string $BuyerPaymentTransactionNumber
 * @property MerchantDataVariationType $Variation
 * @property string $TaxCategory
 * @property TaxesType $Taxes
 * @property TransactionStatusType $Status
 * @property AmountType $ActualShippingCost
 * @property UnpaidItemType $UnpaidItem
 */
class OrderLineItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OrderLineItemID'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
            ],
            'TransactionTime'               => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionTime',
            ],
            'OriginalChargeTime'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OriginalChargeTime',
            ],
            'ItemID'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'ItemTitle'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTitle',
            ],
            'SerialNumber'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SerialNumber',
            ],
            'SKU'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'GlobalCategoryDescription'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalCategoryDescription',
            ],
            'SiteDescription'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SiteDescription',
            ],
            'QuantitySold'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySold',
            ],
            'SalePrice'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalePrice',
            ],
            'TaxAmount'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxAmount',
            ],
            'ShippingCost'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCost',
            ],
            'TotalCost'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalCost',
            ],
            'PaymentClearedTime'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentClearedTime',
            ],
            'InsuranceCost'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceCost',
            ],
            'ListingSiteID'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingSiteID',
            ],
            'SaleTime'                      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTime',
            ],
            'Memo'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Memo',
            ],
            'SecondDescription'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondDescription',
            ],
            'FeeDescription'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeDescription',
            ],
            'FeeAmount'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeAmount',
            ],
            'SellingManagerSaleRecordID'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerSaleRecordID',
            ],
            'BuyerPaymentTransactionNumber' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPaymentTransactionNumber',
            ],
            'Variation'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MerchantDataVariationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variation',
            ],
            'TaxCategory'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxCategory',
            ],
            'Taxes'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TaxesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Taxes',
            ],
            'Status'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'ActualShippingCost'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualShippingCost',
            ],
            'UnpaidItem'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UnpaidItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnpaidItem',
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
