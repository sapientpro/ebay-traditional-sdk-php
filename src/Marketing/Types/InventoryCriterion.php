<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\InventoryCriterionEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property InventoryCriterionEnum $inventoryCriterionType
 * @property InventoryItem[] $inventoryItems
 * @property string[] $listingIds
 * @property RuleCriteria $ruleCriteria
 */
class InventoryCriterion extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'inventoryCriterionType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventoryCriterionType',
            ],
            'inventoryItems'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\InventoryItem',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'inventoryItems',
            ],
            'listingIds'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'listingIds',
            ],
            'ruleCriteria'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\RuleCriteria',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ruleCriteria',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
