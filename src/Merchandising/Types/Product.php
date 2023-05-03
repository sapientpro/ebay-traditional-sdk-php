<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Merchandising\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ProductId $productId
 * @property string $title
 * @property string $productURL
 * @property string $catalogName
 * @property string $imageURL
 * @property int $reviewCount
 * @property Amount $priceRangeMin
 * @property Amount $priceRangeMax
 */
class Product extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productId'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\ProductId',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productId',
            ],
            'title'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'productURL'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productURL',
            ],
            'catalogName'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'catalogName',
            ],
            'imageURL'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'imageURL',
            ],
            'reviewCount'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reviewCount',
            ],
            'priceRangeMin' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceRangeMin',
            ],
            'priceRangeMax' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceRangeMax',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
