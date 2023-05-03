<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Image[] $additionalImages
 * @property int $bidCount
 * @property string[] $buyingOptions
 * @property Category[] $categories
 * @property string $condition
 * @property string $conditionId
 * @property ConvertedAmount $currentBidPrice
 * @property TargetLocation $distanceFromPickupLocation
 * @property string $energyEfficiencyClass
 * @property string $epid
 * @property Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemGroupHref
 * @property string $itemGroupType
 * @property string $itemHref
 * @property string $itemId
 * @property ItemLocationImpl $itemLocation
 * @property string $itemWebUrl
 * @property MarketingPrice $marketingPrice
 * @property PickupOptionSummary[] $pickupOptions
 * @property ConvertedAmount $price
 * @property Seller $seller
 * @property ShippingOptionSummary[] $shippingOptions
 * @property Image[] $thumbnailImages
 * @property string $title
 */
class ItemSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'additionalImages'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Image',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'additionalImages',
            ],
            'bidCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bidCount',
            ],
            'buyingOptions'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'buyingOptions',
            ],
            'categories'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Category',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categories',
            ],
            'condition'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'condition',
            ],
            'conditionId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'conditionId',
            ],
            'currentBidPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentBidPrice',
            ],
            'distanceFromPickupLocation' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\TargetLocation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'distanceFromPickupLocation',
            ],
            'energyEfficiencyClass'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'energyEfficiencyClass',
            ],
            'epid'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'epid',
            ],
            'image'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Image',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'image',
            ],
            'itemAffiliateWebUrl'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemAffiliateWebUrl',
            ],
            'itemGroupHref'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupHref',
            ],
            'itemGroupType'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupType',
            ],
            'itemHref'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemHref',
            ],
            'itemId'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'itemLocation'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ItemLocationImpl',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemLocation',
            ],
            'itemWebUrl'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemWebUrl',
            ],
            'marketingPrice'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\MarketingPrice',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketingPrice',
            ],
            'pickupOptions'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\PickupOptionSummary',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'pickupOptions',
            ],
            'price'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'price',
            ],
            'seller'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Seller',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'seller',
            ],
            'shippingOptions'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ShippingOptionSummary',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingOptions',
            ],
            'thumbnailImages'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Image',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'thumbnailImages',
            ],
            'title'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'watchCount'                      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'watchCount',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
