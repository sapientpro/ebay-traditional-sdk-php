<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property PaginationResultType $PaginationResult
 * @property bool $HasMoreOrders
 * @property OrderArrayType $OrderArray
 * @property int $OrdersPerPage
 * @property int $PageNumber
 * @property int $ReturnedOrderCountActual
 */
class GetOrdersResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaginationResult'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'HasMoreOrders'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasMoreOrders',
            ],
            'OrderArray'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\OrderArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderArray',
            ],
            'OrdersPerPage'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrdersPerPage',
            ],
            'PageNumber'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'ReturnedOrderCountActual' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnedOrderCountActual',
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
