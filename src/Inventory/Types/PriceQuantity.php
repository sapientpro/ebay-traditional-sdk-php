<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property OfferPriceQuantity[] $offers
 * @property ShipToLocationAvailability $shipToLocationAvailability
 * @property string $sku
 */
class PriceQuantity extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'offers'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\OfferPriceQuantity',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'offers',
            ],
            'shipToLocationAvailability' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ShipToLocationAvailability',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipToLocationAvailability',
            ],
            'sku'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sku',
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
