<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MultiLegShippingServiceType $ShippingServiceDetails
 * @property AddressType $ShipToAddress
 * @property int $ShippingTimeMin
 * @property int $ShippingTimeMax
 */
class MultiLegShipmentType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingServiceDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MultiLegShippingServiceType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceDetails',
            ],
            'ShipToAddress'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipToAddress',
            ],
            'ShippingTimeMin'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMin',
            ],
            'ShippingTimeMax'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMax',
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
