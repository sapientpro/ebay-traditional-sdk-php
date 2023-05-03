<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ShipmentTrackingType[] $allShipmentTrackings
 * @property string $payee
 * @property ShipmentTrackingType $shipmentTracking
 * @property ReturnShippingCostDetailType $shippingLabelCost
 */
class ShipmentType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'allShipmentTrackings' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ShipmentTrackingType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'allShipmentTrackings',
            ],
            'payee'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'payee',
            ],
            'shipmentTracking'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ShipmentTrackingType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipmentTracking',
            ],
            'shippingLabelCost'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnShippingCostDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingLabelCost',
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
