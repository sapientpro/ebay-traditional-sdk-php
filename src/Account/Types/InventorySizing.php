<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $currentAvailableQuantity
 * @property Amount $currentInventoryValue
 * @property InventorySnapshot $inventorySnapshots
 * @property string $primarySalesCategory
 */
class InventorySizing extends BaseType
{
    private static array $propertyTypes = [
            'currentAvailableQuantity' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentAvailableQuantity',
            ],
            'currentInventoryValue'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentInventoryValue',
            ],
            'inventorySnapshots'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\InventorySnapshot',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventorySnapshots',
            ],
            'primarySalesCategory'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primarySalesCategory',
            ],
    ];

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
