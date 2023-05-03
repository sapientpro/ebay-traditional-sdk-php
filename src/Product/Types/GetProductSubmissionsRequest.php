<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use SapientPro\EbayTraditionalSDK\Product\Enums\OutputSelector;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ProductSubmissionFilter[] $productSubmissionFilter
 * @property OutputSelector $outputSelector
 * @property PaginationInput $paginationInput
 * @property SortOption[] $sortOption
 */
class GetProductSubmissionsRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productSubmissionFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductSubmissionFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productSubmissionFilter',
            ],
            'outputSelector'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'outputSelector',
            ],
            'paginationInput'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'sortOption'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\SortOption',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'sortOption',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'getProductSubmissionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
