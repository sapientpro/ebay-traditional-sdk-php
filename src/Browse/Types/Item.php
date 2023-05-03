<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Enums\PriceDisplayConditionEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Image[] $additionalImages
 * @property string $ageGroup
 * @property int $bidCount
 * @property string $brand
 * @property string[] $buyingOptions
 * @property string $categoryPath
 * @property string $color
 * @property string $condition
 * @property string $conditionId
 * @property ConvertedAmount $currentBidPrice
 * @property string $description
 * @property string $energyEfficiencyClass
 * @property string $epid
 * @property EstimatedAvailability[] $estimatedAvailabilities
 * @property string $gender
 * @property string $gtin
 * @property Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemEndDate
 * @property string $itemId
 * @property Address $itemLocation
 * @property string $legacyItemId
 * @property string $itemWebUrl
 * @property TypedNameValue[] $localizedAspects
 * @property MarketingPrice $marketingPrice
 * @property string $material
 * @property string $mpn
 * @property string $pattern
 * @property ConvertedAmount $price
 * @property PriceDisplayConditionEnum $priceDisplayCondition
 * @property ItemGroupSummary $primaryItemGroup
 * @property ReviewRating $primaryProductReviewRating
 * @property string $productFicheWebUrl
 * @property int $quantityLimitPerBuyer
 * @property ItemReturnTerms $returnTerms
 * @property Seller $seller
 * @property ShippingOption[] $shippingOptions
 * @property ShipToLocations $shipToLocations
 * @property string $shortDescription
 * @property string $size
 * @property string $sizeSystem
 * @property string $sizeType
 * @property string $subtitle
 * @property Taxes[] $taxes
 * @property string $title
 * @property bool $topRatedBuyingExperience
 * @property int $uniqueBidderCount
 * @property ErrorDetailV3[] $warnings
 */
class Item extends BaseType
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
            'ageGroup'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ageGroup',
            ],
            'bidCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bidCount',
            ],
            'brand'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'buyingOptions'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'buyingOptions',
            ],
            'categoryPath'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryPath',
            ],
            'color'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'color',
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
            'description'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
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
            'estimatedAvailabilities'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\EstimatedAvailability',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'estimatedAvailabilities',
            ],
            'gender'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'gender',
            ],
            'gtin'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'gtin',
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
            'itemEndDate'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemEndDate',
            ],
            'itemId'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'itemLocation'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Address',
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
            'legacyItemId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'legacyItemId',
            ],
            'localizedAspects'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\TypedNameValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'localizedAspects',
            ],
            'marketingPrice'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\MarketingPrice',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketingPrice',
            ],
            'material'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'material',
            ],
            'mpn'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'mpn',
            ],
            'pattern'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pattern',
            ],
            'price'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'price',
            ],
            'priceDisplayCondition'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceDisplayCondition',
            ],
            'primaryItemGroup'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ItemGroupSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryItemGroup',
            ],
            'primaryProductReviewRating' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ReviewRating',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryProductReviewRating',
            ],
            'productFicheWebUrl'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productFicheWebUrl',
            ],
            'quantityLimitPerBuyer'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantityLimitPerBuyer',
            ],
            'returnTerms'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ItemReturnTerms',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnTerms',
            ],
            'seller'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Seller',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'seller',
            ],
            'shippingOptions'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ShippingOption',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingOptions',
            ],
            'shipToLocations'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ShipToLocations',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipToLocations',
            ],
            'shortDescription'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shortDescription',
            ],
            'size'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'size',
            ],
            'sizeSystem'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sizeSystem',
            ],
            'sizeType'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sizeType',
            ],
            'subtitle'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subtitle',
            ],
            'taxes'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Taxes',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'taxes',
            ],
            'title'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'topRatedBuyingExperience'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'topRatedBuyingExperience',
            ],
            'uniqueBidderCount'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'uniqueBidderCount',
            ],
            'warnings'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
