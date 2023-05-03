<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;

use function array_key_exists;

/**
 * @property string $InvoiceID
 * @property string $SellerID
 * @property string $AccountID
 * @property DateTime $ReportStartTime
 * @property DateTime $ReportEndTime
 * @property DateTime $InvoiceProcessingTime
 * @property DateTime $ReportProcessingTime
 * @property AmountType $FeeSettlementAmount
 * @property AmountType $LastInvoiceAmount
 * @property AmountType $FeeRoundingAdjustmentAmount
 * @property AmountType $FeeTotalUsageAdjustmentAmount
 * @property OrderDetailsType[] $OrderTransactionList
 * @property TransactionListType[] $ListingTransactionList
 * @property OrderDetailsType[] $OrderAdjustmentList
 * @property AccountTransactionType[] $AccountTransactionList
 * @property AccountTransactionType[] $DiscountTransactionList
 */
class FeeSettlementReportResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'InvoiceID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceID',
            ],
            'SellerID'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerID',
            ],
            'AccountID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountID',
            ],
            'ReportStartTime'               => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReportStartTime',
            ],
            'ReportEndTime'                 => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReportEndTime',
            ],
            'InvoiceProcessingTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceProcessingTime',
            ],
            'ReportProcessingTime'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReportProcessingTime',
            ],
            'FeeSettlementAmount'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeSettlementAmount',
            ],
            'LastInvoiceAmount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastInvoiceAmount',
            ],
            'FeeRoundingAdjustmentAmount'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeRoundingAdjustmentAmount',
            ],
            'FeeTotalUsageAdjustmentAmount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeTotalUsageAdjustmentAmount',
            ],
            'OrderTransactionList'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'OrderTransactionList',
            ],
            'ListingTransactionList'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionListType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingTransactionList',
            ],
            'OrderAdjustmentList'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'OrderAdjustmentList',
            ],
            'AccountTransactionList'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AccountTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AccountTransactionList',
            ],
            'DiscountTransactionList'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AccountTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DiscountTransactionList',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'FeeSettlementReport';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
