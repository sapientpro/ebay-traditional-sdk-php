<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Inventory\Enums\MinimumAdvertisedPriceHandlingEnum;
use SapientPro\EbayTraditionalSDK\Inventory\Enums\SoldOnEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $minimumAdvertisedPrice
 * @property SoldOnEnum $originallySoldForRetailPriceOn
 * @property Amount $originalRetailPrice
 * @property Amount $price
 * @property MinimumAdvertisedPriceHandlingEnum $pricingVisibility
 */
class PricingSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'minimumAdvertisedPrice'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minimumAdvertisedPrice',
            ],
            'originallySoldForRetailPriceOn' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originallySoldForRetailPriceOn',
            ],
            'originalRetailPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originalRetailPrice',
            ],
            'price'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'price',
            ],
            'pricingVisibility'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingVisibility',
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
