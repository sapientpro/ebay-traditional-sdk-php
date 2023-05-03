<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property SellingSummaryType $SellingSummary
 * @property PaginatedItemArrayType $ScheduledList
 * @property PaginatedItemArrayType $ActiveList
 * @property PaginatedOrderTransactionArrayType $SoldList
 * @property PaginatedItemArrayType $UnsoldList
 * @property MyeBaySellingSummaryType $Summary
 * @property PaginatedOrderTransactionArrayType $DeletedFromSoldList
 * @property PaginatedItemArrayType $DeletedFromUnsoldList
 */
class GetMyeBaySellingResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SellingSummary'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingSummary',
            ],
            'ScheduledList'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ScheduledList',
            ],
            'ActiveList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActiveList',
            ],
            'SoldList'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedOrderTransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldList',
            ],
            'UnsoldList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnsoldList',
            ],
            'Summary'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyeBaySellingSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Summary',
            ],
            'DeletedFromSoldList'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedOrderTransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromSoldList',
            ],
            'DeletedFromUnsoldList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginatedItemArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromUnsoldList',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
