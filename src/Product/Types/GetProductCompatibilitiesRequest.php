<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use function array_key_exists;

/**
 * @property ProductIdentifier $productIdentifier
 * @property PaginationInput $paginationInput
 * @property PropertyValue[] $applicationPropertyFilter
 * @property string[] $dataset
 * @property CompatibilitySort[] $sortOrder
 * @property ProductStatus $disabledProductFilter
 * @property string[] $datasetPropertyName
 */
class GetProductCompatibilitiesRequest extends BaseServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productIdentifier'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductIdentifier',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productIdentifier',
            ],
            'paginationInput'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'applicationPropertyFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'applicationPropertyFilter',
            ],
            'dataset'                   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dataset',
            ],
            'sortOrder'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\CompatibilitySort',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'sortOrder',
            ],
            'disabledProductFilter'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductStatus',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'disabledProductFilter',
            ],
            'datasetPropertyName'       => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'datasetPropertyName',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getProductCompatibilitiesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
