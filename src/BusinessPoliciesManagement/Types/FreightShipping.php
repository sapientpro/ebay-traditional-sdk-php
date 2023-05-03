<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $originPickupLocationType
 * @property bool $originPickupInside
 * @property bool $packagingHelpRequired
 * @property string $commodityType
 * @property float $freightShippingClass
 * @property string $destPickupLocationType
 * @property bool $destPickupInside
 */
class FreightShipping extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'originPickupLocationType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originPickupLocationType',
            ],
            'originPickupInside'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originPickupInside',
            ],
            'packagingHelpRequired'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'packagingHelpRequired',
            ],
            'commodityType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'commodityType',
            ],
            'freightShippingClass'     => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'freightShippingClass',
            ],
            'destPickupLocationType'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'destPickupLocationType',
            ],
            'destPickupInside'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'destPickupInside',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
