<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemSortTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\OrderStatusFilterCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $Include
 * @property ListingTypeCodeType $ListingType
 * @property ItemSortTypeCodeType $Sort
 * @property int $DurationInDays
 * @property bool $IncludeNotes
 * @property PaginationType $Pagination
 * @property OrderStatusFilterCodeType $OrderStatusFilter
 */
class ItemListCustomizationType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Include'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Include',
            ],
            'ListingType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingType',
            ],
            'Sort'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Sort',
            ],
            'DurationInDays'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DurationInDays',
            ],
            'IncludeNotes'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeNotes',
            ],
            'Pagination'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'OrderStatusFilter' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderStatusFilter',
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
