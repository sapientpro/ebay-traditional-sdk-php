<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $title
 * @property string $detailsURL
 * @property string $stockPhotoURL
 * @property ProductIDType[] $productID
 * @property string[] $categoryName
 * @property NameValueListArrayType $itemSpecifics
 * @property ItemType[] $item
 * @property Amount $listPrice
 * @property int $reviewCount
 * @property Amount $BestFixedPrice
 * @property Amount $BestRentalPrice
 */
class HalfCatalogProductType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'title'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'detailsURL'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'detailsURL',
            ],
            'stockPhotoURL'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'stockPhotoURL',
            ],
            'productID'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ProductIDType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productID',
            ],
            'categoryName'    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryName',
            ],
            'itemSpecifics'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemSpecifics',
            ],
            'item'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ItemType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'item',
            ],
            'listPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listPrice',
            ],
            'reviewCount'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reviewCount',
            ],
            'BestFixedPrice'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestFixedPrice',
            ],
            'BestRentalPrice' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestRentalPrice',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
