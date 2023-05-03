<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Types;

use function array_key_exists;

/**
 * @property ProductIDType $productID
 * @property PaginationInputType $paginationInput
 * @property ItemFilter[] $itemFilter
 * @property SortByType $sortBy
 */
class FindItemsRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productID'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ProductIDType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productID',
            ],
            'paginationInput' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\PaginationInputType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'itemFilter'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ItemFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemFilter',
            ],
            'sortBy'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\SortByType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortBy',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findHalfItemsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
