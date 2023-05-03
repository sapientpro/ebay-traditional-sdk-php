<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $StoreID
 * @property string $ShippingTrackingEvent
 * @property DateTime $ScheduledDeliveryTimeMin
 * @property DateTime $ScheduledDeliveryTimeMax
 * @property DateTime $ActualDeliveryTime
 * @property DateTime $EstimatedDeliveryTimeMin
 * @property DateTime $EstimatedDeliveryTimeMax
 * @property DateTime $HandleByTime
 * @property DateTime $MinNativeEstimatedDeliveryTime
 * @property DateTime $MaxNativeEstimatedDeliveryTime
 */
class ShippingPackageInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'StoreID'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreID',
            ],
            'ShippingTrackingEvent'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTrackingEvent',
            ],
            'ScheduledDeliveryTimeMin'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ScheduledDeliveryTimeMin',
            ],
            'ScheduledDeliveryTimeMax'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ScheduledDeliveryTimeMax',
            ],
            'ActualDeliveryTime'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActualDeliveryTime',
            ],
            'EstimatedDeliveryTimeMin'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EstimatedDeliveryTimeMin',
            ],
            'EstimatedDeliveryTimeMax'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EstimatedDeliveryTimeMax',
            ],
            'HandleByTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HandleByTime',
            ],
            'MinNativeEstimatedDeliveryTime' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinNativeEstimatedDeliveryTime',
            ],
            'MaxNativeEstimatedDeliveryTime' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxNativeEstimatedDeliveryTime',
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
