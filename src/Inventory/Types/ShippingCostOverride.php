<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Inventory\Enums\ShippingServiceTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $additionalShippingCost
 * @property int $priority
 * @property Amount $shippingCost
 * @property ShippingServiceTypeEnum $shippingServiceType
 * @property Amount $surcharge
 */
class ShippingCostOverride extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'additionalShippingCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'additionalShippingCost',
            ],
            'priority'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priority',
            ],
            'shippingCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingServiceType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceType',
            ],
            'surcharge'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'surcharge',
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
