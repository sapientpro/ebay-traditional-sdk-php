<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use function array_key_exists;

/**
 * @property string $categoryId
 * @property PropertyValue[] $compatibilityPropertyFilter
 * @property PropertyValue[] $specification
 * @property string[] $dataSet
 * @property string[] $datasetPropertyName
 * @property bool $exactMatch
 * @property PaginationInput $paginationInput
 * @property CompatibilitySort[] $sortOrder
 */
class FindCompatibilitiesBySpecificationRequest extends BaseServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'categoryId'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'compatibilityPropertyFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'compatibilityPropertyFilter',
            ],
            'specification'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'specification',
            ],
            'dataSet'                     => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dataSet',
            ],
            'datasetPropertyName'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'datasetPropertyName',
            ],
            'exactMatch'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'exactMatch',
            ],
            'paginationInput'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'sortOrder'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\CompatibilitySort',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'sortOrder',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'findCompatibilitiesBySpecificationRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
