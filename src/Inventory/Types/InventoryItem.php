<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Inventory\Enums\ConditionEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Availability $availability
 * @property ConditionEnum $condition
 * @property string $conditionDescription
 * @property PackageWeightAndSize $packageWeightAndSize
 * @property Product $product
 * @property string $sku
 * @property string[] $groupIds
 */
class InventoryItem extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'availability'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Availability',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'availability',
            ],
            'condition'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'condition',
            ],
            'conditionDescription' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'conditionDescription',
            ],
            'packageWeightAndSize' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\PackageWeightAndSize',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'packageWeightAndSize',
            ],
            'product'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Product',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'product',
            ],
            'sku'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sku',
            ],
            'groupIds'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'groupIds',
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
