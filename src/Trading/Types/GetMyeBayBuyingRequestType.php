<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property ItemListCustomizationType $WatchList
 * @property ItemListCustomizationType $BidList
 * @property ItemListCustomizationType $BestOfferList
 * @property ItemListCustomizationType $WonList
 * @property ItemListCustomizationType $LostList
 * @property MyeBaySelectionType $FavoriteSearches
 * @property MyeBaySelectionType $FavoriteSellers
 * @property MyeBaySelectionType $SecondChanceOffer
 * @property ItemListCustomizationType $DeletedFromWonList
 * @property ItemListCustomizationType $DeletedFromLostList
 * @property ItemListCustomizationType $BuyingSummary
 * @property MyeBaySelectionType $UserDefinedLists
 * @property bool $HideVariations
 */
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'WatchList'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WatchList',
            ],
            'BidList'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidList',
            ],
            'BestOfferList'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferList',
            ],
            'WonList'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WonList',
            ],
            'LostList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LostList',
            ],
            'FavoriteSearches'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBaySelectionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FavoriteSearches',
            ],
            'FavoriteSellers'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBaySelectionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FavoriteSellers',
            ],
            'SecondChanceOffer'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBaySelectionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondChanceOffer',
            ],
            'DeletedFromWonList'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromWonList',
            ],
            'DeletedFromLostList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromLostList',
            ],
            'BuyingSummary'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyingSummary',
            ],
            'UserDefinedLists'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBaySelectionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserDefinedLists',
            ],
            'HideVariations'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HideVariations',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBayBuyingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
