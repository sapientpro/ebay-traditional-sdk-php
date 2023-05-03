<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SoldAggregatedMetrics $calendarWindowAggregatedMetrics
 * @property LookbackPeriod $lookbackPeriod
 * @property SoldAggregatedMetrics $rollingWindowAggregatedMetrics
 * @property Amount $soldInventoryValue
 * @property int $soldQuantity
 */
class TransactionSnapshot extends BaseType
{
    private static array $propertyTypes = [
            'calendarWindowAggregatedMetrics' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\SoldAggregatedMetrics',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'calendarWindowAggregatedMetrics',
            ],
            'lookbackPeriod'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\LookbackPeriod',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lookbackPeriod',
            ],
            'rollingWindowAggregatedMetrics'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\SoldAggregatedMetrics',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'rollingWindowAggregatedMetrics',
            ],
            'soldInventoryValue'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldInventoryValue',
            ],
            'soldQuantity'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldQuantity',
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
