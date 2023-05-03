<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $ActiveAuctionCount
 * @property int $AuctionSellingCount
 * @property int $AuctionBidCount
 * @property AmountType $TotalAuctionSellingValue
 * @property int $TotalSoldCount
 * @property AmountType $TotalSoldValue
 * @property int $SoldDurationInDays
 * @property int $ClassifiedAdCount
 * @property int $TotalLeadCount
 * @property int $ClassifiedAdOfferCount
 * @property int $TotalListingsWithLeads
 * @property int $QuantityLimitRemaining
 * @property AmountType $AmountLimitRemaining
 */
class MyeBaySellingSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ActiveAuctionCount'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActiveAuctionCount',
            ],
            'AuctionSellingCount'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AuctionSellingCount',
            ],
            'AuctionBidCount'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AuctionBidCount',
            ],
            'TotalAuctionSellingValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalAuctionSellingValue',
            ],
            'TotalSoldCount'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalSoldCount',
            ],
            'TotalSoldValue'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalSoldValue',
            ],
            'SoldDurationInDays'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldDurationInDays',
            ],
            'ClassifiedAdCount'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdCount',
            ],
            'TotalLeadCount'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalLeadCount',
            ],
            'ClassifiedAdOfferCount'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ClassifiedAdOfferCount',
            ],
            'TotalListingsWithLeads'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalListingsWithLeads',
            ],
            'QuantityLimitRemaining'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityLimitRemaining',
            ],
            'AmountLimitRemaining'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountLimitRemaining',
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
