<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $maxSoldInventoryValue
 * @property int $maxSoldQuantity
 * @property Amount $minSoldInventoryValue
 * @property int $minSoldQuantity
 * @property TimeDuration $period
 */
class SoldAggregatedMetrics extends BaseType
{
    private static array $propertyTypes = [
            'maxSoldInventoryValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxSoldInventoryValue',
            ],
            'maxSoldQuantity'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxSoldQuantity',
            ],
            'minSoldInventoryValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minSoldInventoryValue',
            ],
            'minSoldQuantity'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minSoldQuantity',
            ],
            'period'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TimeDuration',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'period',
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
