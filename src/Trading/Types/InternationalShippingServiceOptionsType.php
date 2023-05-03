<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ShippingService
 * @property AmountType $ShippingServiceCost
 * @property AmountType $ShippingServiceAdditionalCost
 * @property int $ShippingServicePriority
 * @property string[] $ShipToLocation
 * @property AmountType $ShippingInsuranceCost
 * @property AmountType $ImportCharge
 * @property DateTime $ShippingServiceCutOffTime
 */
class InternationalShippingServiceOptionsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingService'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingService',
            ],
            'ShippingServiceCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCost',
            ],
            'ShippingServiceAdditionalCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceAdditionalCost',
            ],
            'ShippingServicePriority'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServicePriority',
            ],
            'ShipToLocation'                => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShipToLocation',
            ],
            'ShippingInsuranceCost'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingInsuranceCost',
            ],
            'ImportCharge'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ImportCharge',
            ],
            'ShippingServiceCutOffTime'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCutOffTime',
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
