<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $locationAdditionalInformation
 * @property string $locationInstructions
 * @property string $locationWebUrl
 * @property string $name
 * @property OperatingHours[] $operatingHours
 * @property string $phone
 * @property SpecialHours[] $specialHours
 */
class InventoryLocation extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'locationAdditionalInformation' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'locationAdditionalInformation',
            ],
            'locationInstructions'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'locationInstructions',
            ],
            'locationWebUrl'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'locationWebUrl',
            ],
            'name'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'name',
            ],
            'operatingHours'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\OperatingHours',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'operatingHours',
            ],
            'phone'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'phone',
            ],
            'specialHours'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\SpecialHours',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'specialHours',
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
