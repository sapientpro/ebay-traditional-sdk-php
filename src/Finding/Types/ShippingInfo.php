<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $shippingServiceCost
 * @property string $shippingType
 * @property string[] $shipToLocations
 * @property bool $expeditedShipping
 * @property bool $oneDayShippingAvailable
 * @property int $handlingTime
 * @property bool $intermediatedShipping
 */
class ShippingInfo extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'shippingServiceCost'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceCost',
            ],
            'shippingType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingType',
            ],
            'shipToLocations'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shipToLocations',
            ],
            'expeditedShipping'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expeditedShipping',
            ],
            'oneDayShippingAvailable' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'oneDayShippingAvailable',
            ],
            'handlingTime'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'handlingTime',
            ],
            'intermediatedShipping'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'intermediatedShipping',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
