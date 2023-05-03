<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Feed\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Feed\Enums\CurrencyCodeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ageGroup
 * @property string $brand
 * @property string $category
 * @property string $categoryId
 * @property string $color
 * @property string $condition
 * @property string $conditionId
 * @property string $gender
 * @property string $gtin
 * @property string $imageUrl
 * @property DateTime $itemEndDate
 * @property string $itemId
 * @property string $material
 * @property string $mpn
 * @property CurrencyCodeEnum $priceCurrency
 * @property string $priceValue
 * @property string $sellerFeedbackPercentage
 * @property float $sellerFeedbackScore
 * @property string $sellerUsername
 * @property string $size
 * @property string $sizeType
 * @property string $title
 */
class ItemFeed extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ageGroup'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ageGroup',
            ],
            'brand'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'category'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'categoryId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'color'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'color',
            ],
            'condition'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'condition',
            ],
            'conditionId'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'conditionId',
            ],
            'gender'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'gender',
            ],
            'gtin'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'gtin',
            ],
            'imageUrl'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'imageUrl',
            ],
            'itemEndDate'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemEndDate',
            ],
            'itemId'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'material'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'material',
            ],
            'mpn'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'mpn',
            ],
            'priceCurrency'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceCurrency',
            ],
            'priceValue'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceValue',
            ],
            'sellerFeedbackPercentage' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerFeedbackPercentage',
            ],
            'sellerFeedbackScore'      => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerFeedbackScore',
            ],
            'sellerUsername'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerUsername',
            ],
            'size'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'size',
            ],
            'sizeType'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sizeType',
            ],
            'title'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
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
