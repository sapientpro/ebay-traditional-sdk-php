<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $BidCount
 * @property AmountType $BidIncrement
 * @property AmountType $ConvertedCurrentPrice
 * @property AmountType $CurrentPrice
 * @property UserType $HighBidder
 * @property int $LeadCount
 * @property AmountType $MinimumToBid
 * @property int $QuantitySold
 * @property bool $ReserveMet
 * @property bool $SecondChanceEligible
 * @property int $BidderCount
 * @property ListingStatusCodeType $ListingStatus
 * @property AmountType $FinalValueFee
 * @property PromotionalSaleDetailsType $PromotionalSaleDetails
 * @property bool $AdminEnded
 * @property bool $SoldAsBin
 * @property int $QuantitySoldByPickupInStore
 * @property SuggestedBidValueType $SuggestedBidValues
 */
class SellingStatusType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BidCount'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidCount',
            ],
            'BidIncrement'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidIncrement',
            ],
            'ConvertedCurrentPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedCurrentPrice',
            ],
            'CurrentPrice'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CurrentPrice',
            ],
            'HighBidder'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HighBidder',
            ],
            'LeadCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LeadCount',
            ],
            'MinimumToBid'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumToBid',
            ],
            'QuantitySold'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySold',
            ],
            'ReserveMet'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReserveMet',
            ],
            'SecondChanceEligible'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondChanceEligible',
            ],
            'BidderCount'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidderCount',
            ],
            'ListingStatus'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingStatus',
            ],
            'FinalValueFee'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FinalValueFee',
            ],
            'PromotionalSaleDetails'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PromotionalSaleDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleDetails',
            ],
            'AdminEnded'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdminEnded',
            ],
            'SoldAsBin'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldAsBin',
            ],
            'QuantitySoldByPickupInStore' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantitySoldByPickupInStore',
            ],
            'SuggestedBidValues'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SuggestedBidValueType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SuggestedBidValues',
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
