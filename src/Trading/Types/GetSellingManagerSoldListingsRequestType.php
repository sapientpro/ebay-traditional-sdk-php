<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SortOrderCodeType;

use function array_key_exists;

/**
 * @property SellingManagerSearchType $Search
 * @property int $StoreCategoryID
 * @property SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
 * @property bool $Archived
 * @property SellingManagerSoldListingsSortTypeCodeType $Sort
 * @property SortOrderCodeType $SortOrder
 * @property PaginationType $Pagination
 * @property TimeRangeType $SaleDateRange
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Search'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerSearchType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Search',
            ],
            'StoreCategoryID' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreCategoryID',
            ],
            'Filter'          => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Filter',
            ],
            'Archived'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Archived',
            ],
            'Sort'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Sort',
            ],
            'SortOrder'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SortOrder',
            ],
            'Pagination'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'SaleDateRange'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TimeRangeType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleDateRange',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerSoldListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
