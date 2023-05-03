<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $invocationId
 * @property string $categoryId
 * @property string $keywords
 * @property PropertyValue[] $propertyFilter
 * @property SortOrder $sortOrder
 * @property string[] $dataset
 * @property string[] $datasetPropertyName
 * @property PaginationInput $paginationInput
 * @property ProductStatus $productStatusFilter
 */
class ProductRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'invocationId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'invocationId',
            ],
            'categoryId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'keywords'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'keywords',
            ],
            'propertyFilter'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'propertyFilter',
            ],
            'sortOrder'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\SortOrder',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortOrder',
            ],
            'dataset'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dataset',
            ],
            'datasetPropertyName' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'datasetPropertyName',
            ],
            'paginationInput'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'productStatusFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductStatus',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productStatusFilter',
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
