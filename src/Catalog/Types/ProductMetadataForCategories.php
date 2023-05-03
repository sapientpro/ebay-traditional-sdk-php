<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CategoryAspect[] $aspects
 * @property ProductIdentifier $brand
 * @property ProductIdentifier $mpn
 */
class ProductMetadataForCategories extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'aspects' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\CategoryAspect',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspects',
            ],
            'brand'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ProductIdentifier',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'mpn'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ProductIdentifier',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'mpn',
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
