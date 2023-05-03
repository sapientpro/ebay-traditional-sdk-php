<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string[] $additionalImageUrls
 * @property Aspect[] $aspects
 * @property string $brand
 * @property string $description
 * @property string[] $ean
 * @property string $epid
 * @property string $imageUrl
 * @property string[] $isbn
 * @property string[] $mpn
 * @property string[] $otherApplicableCategoryIds
 * @property string $primaryCategoryId
 * @property string $title
 * @property string[] $upc
 * @property string $version
 */
class SuggestedProduct extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'additionalImageUrls'        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'additionalImageUrls',
            ],
            'aspects'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Aspect',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspects',
            ],
            'brand'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'description'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'ean'                        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ean',
            ],
            'epid'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'epid',
            ],
            'imageUrl'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'imageUrl',
            ],
            'isbn'                       => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'isbn',
            ],
            'mpn'                        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'mpn',
            ],
            'otherApplicableCategoryIds' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'otherApplicableCategoryIds',
            ],
            'primaryCategoryId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryCategoryId',
            ],
            'title'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'upc'                        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'upc',
            ],
            'version'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'version',
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
