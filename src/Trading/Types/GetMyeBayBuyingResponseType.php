<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property BuyingSummaryType $BuyingSummary
 * @property PaginatedItemArrayType $WatchList
 * @property PaginatedItemArrayType $BidList
 * @property PaginatedItemArrayType $BestOfferList
 * @property PaginatedOrderTransactionArrayType $WonList
 * @property PaginatedItemArrayType $LostList
 * @property MyeBayFavoriteSearchListType $FavoriteSearches
 * @property MyeBayFavoriteSellerListType $FavoriteSellers
 * @property ItemType[] $SecondChanceOffer
 * @property PaginatedOrderTransactionArrayType $DeletedFromWonList
 * @property PaginatedItemArrayType $DeletedFromLostList
 * @property UserDefinedListType[] $UserDefinedList
 */
class GetMyeBayBuyingResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BuyingSummary'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyingSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyingSummary',
            ],
            'WatchList'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WatchList',
            ],
            'BidList'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidList',
            ],
            'BestOfferList'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferList',
            ],
            'WonList'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedOrderTransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WonList',
            ],
            'LostList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LostList',
            ],
            'FavoriteSearches'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBayFavoriteSearchListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FavoriteSearches',
            ],
            'FavoriteSellers'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBayFavoriteSellerListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FavoriteSellers',
            ],
            'SecondChanceOffer'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SecondChanceOffer',
            ],
            'DeletedFromWonList'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedOrderTransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromWonList',
            ],
            'DeletedFromLostList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromLostList',
            ],
            'UserDefinedList'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserDefinedListType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'UserDefinedList',
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
