<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\TransactionPlatformCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $InvoiceNumber
 * @property int $TransactionID
 * @property int $SaleRecordID
 * @property string $ItemID
 * @property int $QuantitySold
 * @property AmountType $ItemPrice
 * @property AmountType $SubtotalAmount
 * @property string $ItemTitle
 * @property ListingTypeCodeType $ListingType
 * @property bool $Relisted
 * @property int $WatchCount
 * @property AmountType $StartPrice
 * @property AmountType $ReservePrice
 * @property bool $SecondChanceOfferSent
 * @property string $CustomLabel
 * @property TransactionPlatformCodeType $SoldOn
 * @property TransactionPlatformCodeType[] $ListedOn
 * @property ShipmentType $Shipment
 * @property bool $CharityListing
 * @property VariationType $Variation
 * @property string $OrderLineItemID
 */
class SellingManagerSoldTransactionType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'InvoiceNumber'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceNumber',
            ],
            'TransactionID'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'SaleRecordID'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleRecordID',
            ],
            'ItemID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'QuantitySold'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySold',
            ],
            'ItemPrice'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemPrice',
            ],
            'SubtotalAmount'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SubtotalAmount',
            ],
            'ItemTitle'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTitle',
            ],
            'ListingType'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingType',
            ],
            'Relisted'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Relisted',
            ],
            'WatchCount'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WatchCount',
            ],
            'StartPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartPrice',
            ],
            'ReservePrice'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReservePrice',
            ],
            'SecondChanceOfferSent' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondChanceOfferSent',
            ],
            'CustomLabel'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CustomLabel',
            ],
            'SoldOn'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldOn',
            ],
            'ListedOn'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListedOn',
            ],
            'Shipment'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Shipment',
            ],
            'CharityListing'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CharityListing',
            ],
            'Variation'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VariationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Variation',
            ],
            'OrderLineItemID'       => [
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

        $this->setValues(__CLASS__, $childValues);
    }
}
