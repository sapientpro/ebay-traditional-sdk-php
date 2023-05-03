<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Merchandising\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $itemId
 * @property string $title
 * @property string $viewItemURL
 * @property Amount $currentPrice
 * @property Amount $originalPrice
 * @property string $globalId
 * @property string $timeLeft
 * @property string $primaryCategoryId
 * @property string $primaryCategoryName
 * @property string $subtitle
 * @property int $bidCount
 * @property Amount $buyItNowPrice
 * @property string $country
 * @property string $imageURL
 * @property Amount $shippingCost
 * @property string $shippingType
 * @property int $watchCount
 * @property DiscountPriceInfo $discountPriceInfo
 */
class Item extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemId'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'title'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'viewItemURL'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'viewItemURL',
            ],
            'currentPrice'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentPrice',
            ],
            'originalPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originalPrice',
            ],
            'globalId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'globalId',
            ],
            'timeLeft'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'timeLeft',
            ],
            'primaryCategoryId'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryCategoryId',
            ],
            'primaryCategoryName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryCategoryName',
            ],
            'subtitle'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subtitle',
            ],
            'bidCount'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bidCount',
            ],
            'buyItNowPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyItNowPrice',
            ],
            'country'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'country',
            ],
            'imageURL'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'imageURL',
            ],
            'shippingCost'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingType'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingType',
            ],
            'watchCount'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'watchCount',
            ],
            'discountPriceInfo'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\DiscountPriceInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountPriceInfo',
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
