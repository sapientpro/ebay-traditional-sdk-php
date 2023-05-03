<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\OrderStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SortOrderCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\TradingRoleCodeType;

use function array_key_exists;

/**
 * @property OrderIDArrayType $OrderIDArray
 * @property DateTime $CreateTimeFrom
 * @property DateTime $CreateTimeTo
 * @property TradingRoleCodeType $OrderRole
 * @property OrderStatusCodeType $OrderStatus
 * @property ListingTypeCodeType $ListingType
 * @property PaginationType $Pagination
 * @property DateTime $ModTimeFrom
 * @property DateTime $ModTimeTo
 * @property int $NumberOfDays
 * @property bool $IncludeFinalValueFee
 * @property SortOrderCodeType $SortingOrder
 */
class GetOrdersRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OrderIDArray'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\OrderIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderIDArray',
            ],
            'CreateTimeFrom'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreateTimeFrom',
            ],
            'CreateTimeTo'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreateTimeTo',
            ],
            'OrderRole'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderRole',
            ],
            'OrderStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderStatus',
            ],
            'ListingType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingType',
            ],
            'Pagination'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'ModTimeFrom'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeFrom',
            ],
            'ModTimeTo'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeTo',
            ],
            'NumberOfDays'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NumberOfDays',
            ],
            'IncludeFinalValueFee' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeFinalValueFee',
            ],
            'SortingOrder'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SortingOrder',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetOrdersRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
