<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property CategoryArrayType $CategoryArray
 * @property int $CategoryCount
 * @property DateTime $UpdateTime
 * @property string $CategoryVersion
 * @property bool $ReservePriceAllowed
 * @property float $MinimumReservePrice
 * @property bool $ReduceReserveAllowed
 */
class GetCategoriesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CategoryArray'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryArray',
            ],
            'CategoryCount'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryCount',
            ],
            'UpdateTime'           => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
            ],
            'CategoryVersion'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryVersion',
            ],
            'ReservePriceAllowed'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReservePriceAllowed',
            ],
            'MinimumReservePrice'  => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumReservePrice',
            ],
            'ReduceReserveAllowed' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReduceReserveAllowed',
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
