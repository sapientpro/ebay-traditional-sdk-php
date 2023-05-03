<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Name
 * @property int $ItemCount
 * @property int $FavoriteSellerCount
 * @property ItemArrayType $ItemArray
 * @property MyeBayFavoriteSearchListType $FavoriteSearches
 * @property MyeBayFavoriteSellerListType $FavoriteSellers
 */
class UserDefinedListType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Name'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'ItemCount'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCount',
            ],
            'FavoriteSellerCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FavoriteSellerCount',
            ],
            'ItemArray'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemArray',
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
