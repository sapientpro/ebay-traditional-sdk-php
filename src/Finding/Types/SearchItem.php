<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $itemId
 * @property string $title
 * @property string $globalId
 * @property string $subtitle
 * @property Category $primaryCategory
 * @property Category $secondaryCategory
 * @property string $galleryURL
 * @property GalleryInfoContainer $galleryInfoContainer
 * @property string $viewItemURL
 * @property string $charityId
 * @property ProductId $productId
 * @property string[] $paymentMethod
 * @property bool $autoPay
 * @property string $postalCode
 * @property string $location
 * @property string $country
 * @property Storefront $storeInfo
 * @property SellerInfo $sellerInfo
 * @property ShippingInfo $shippingInfo
 * @property SellingStatus $sellingStatus
 * @property ListingInfo $listingInfo
 * @property bool $returnsAccepted
 * @property string[] $galleryPlusPictureURL
 * @property string $compatibility
 * @property Distance $distance
 * @property Condition $condition
 * @property bool $isMultiVariationListing
 * @property DiscountPriceInfo $discountPriceInfo
 * @property string $pictureURLSuperSize
 * @property string $pictureURLLarge
 * @property UnitPriceInfo $unitPrice
 * @property ItemAttribute[] $attribute
 * @property bool $topRatedListing
 * @property string[] $eekStatus
 */
class SearchItem extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemId'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'title'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'globalId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'globalId',
            ],
            'subtitle'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subtitle',
            ],
            'primaryCategory'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Category',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryCategory',
            ],
            'secondaryCategory'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Category',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'secondaryCategory',
            ],
            'galleryURL'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'galleryURL',
            ],
            'galleryInfoContainer'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\GalleryInfoContainer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'galleryInfoContainer',
            ],
            'viewItemURL'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'viewItemURL',
            ],
            'charityId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'charityId',
            ],
            'productId'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ProductId',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productId',
            ],
            'paymentMethod'           => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentMethod',
            ],
            'autoPay'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'autoPay',
            ],
            'postalCode'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'postalCode',
            ],
            'location'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'location',
            ],
            'country'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'country',
            ],
            'storeInfo'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Storefront',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'storeInfo',
            ],
            'sellerInfo'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\SellerInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerInfo',
            ],
            'shippingInfo'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ShippingInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingInfo',
            ],
            'sellingStatus'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\SellingStatus',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellingStatus',
            ],
            'listingInfo'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ListingInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingInfo',
            ],
            'returnsAccepted'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnsAccepted',
            ],
            'galleryPlusPictureURL'   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'galleryPlusPictureURL',
            ],
            'compatibility'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'compatibility',
            ],
            'distance'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Distance',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'distance',
            ],
            'condition'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Condition',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'condition',
            ],
            'isMultiVariationListing' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isMultiVariationListing',
            ],
            'discountPriceInfo'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\DiscountPriceInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountPriceInfo',
            ],
            'pictureURLSuperSize'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pictureURLSuperSize',
            ],
            'pictureURLLarge'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pictureURLLarge',
            ],
            'unitPrice'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\UnitPriceInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'unitPrice',
            ],
            'attribute'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ItemAttribute',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'attribute',
            ],
            'topRatedListing'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'topRatedListing',
            ],
            'eekStatus'               => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'eekStatus',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
