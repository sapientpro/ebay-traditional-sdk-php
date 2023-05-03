<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Types;

use function array_key_exists;

/**
 * @property PaginationOutputType $paginationOutput
 * @property HalfCatalogProductType $product
 */
class FindItemsResponse extends BaseResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'paginationOutput' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\PaginationOutputType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationOutput',
            ],
            'product'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\HalfCatalogProductType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'product',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
