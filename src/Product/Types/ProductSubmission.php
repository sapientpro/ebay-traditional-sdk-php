<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use function array_key_exists;

/**
 * @property string $invocationId
 * @property string $categoryId
 * @property PropertyValue[] $productPropertyValue
 * @property Media[] $media
 */
class ProductSubmission extends BaseServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'invocationId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'invocationId',
            ],
            'categoryId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'productPropertyValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productPropertyValue',
            ],
            'media'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\Media',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'media',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
