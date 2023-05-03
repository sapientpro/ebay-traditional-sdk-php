<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $cumulativeInventoryValue
 * @property int $cumulativeQuantity
 * @property LookbackPeriod $lookbackPeriod
 * @property int $maxAvailableQuantity
 * @property Amount $maxInventoryValue
 * @property int $minAvailableQuantity
 * @property Amount $minInventoryValue
 */
class InventorySnapshot extends BaseType
{
    private static array $propertyTypes = [
            'cumulativeInventoryValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cumulativeInventoryValue',
            ],
            'cumulativeQuantity'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cumulativeQuantity',
            ],
            'lookbackPeriod'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\LookbackPeriod',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lookbackPeriod',
            ],
            'maxAvailableQuantity'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxAvailableQuantity',
            ],
            'maxInventoryValue'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxInventoryValue',
            ],
            'minAvailableQuantity'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minAvailableQuantity',
            ],
            'minInventoryValue'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minInventoryValue',
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
