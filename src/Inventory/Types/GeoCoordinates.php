<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property float $latitude
 * @property float $longitude
 */
class GeoCoordinates extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'latitude'  => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'latitude',
            ],
            'longitude' => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'longitude',
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
