<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ReturnSortOrderType;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ReturnSortType;

use function array_key_exists;

/**
 * @property ItemFilterType $itemFilter
 * @property string $orderId
 * @property DateRangeFilterType $creationDateRangeFilter
 * @property ReturnStatusFilterType $ReturnStatusFilter
 * @property UserFilterType $otherUserFilter
 * @property PaginationInput $paginationInput
 * @property ReturnSortType $sortType
 * @property ReturnSortOrderType $sortOrderType
 */
class GetUserReturnsRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemFilter'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ItemFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemFilter',
            ],
            'orderId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'orderId',
            ],
            'creationDateRangeFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\DateRangeFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDateRangeFilter',
            ],
            'ReturnStatusFilter'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnStatusFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnStatusFilter',
            ],
            'otherUserFilter'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\UserFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'otherUserFilter',
            ],
            'paginationInput'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'sortType'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortType',
            ],
            'sortOrderType'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortOrderType',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getUserReturnsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
