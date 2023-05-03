<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Image[] $additionalImages
 * @property Aspect[] $aspects
 * @property string $brand
 * @property string $description
 * @property string[] $ean
 * @property string $epid
 * @property string[] $gtin
 * @property Image $image
 * @property string[] $isbn
 * @property string[] $mpn
 * @property string $productHref
 * @property string $productWebUrl
 * @property string $title
 * @property string[] $upc
 */
class ProductSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'additionalImages' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Image',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'additionalImages',
            ],
            'aspects'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Aspect',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspects',
            ],
            'brand'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'description'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'ean'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ean',
            ],
            'epid'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'epid',
            ],
            'gtin'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'gtin',
            ],
            'image'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Image',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'image',
            ],
            'isbn'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'isbn',
            ],
            'mpn'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'mpn',
            ],
            'productHref'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productHref',
            ],
            'productWebUrl'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productWebUrl',
            ],
            'title'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'upc'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'upc',
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
