<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Metadata\Types;

use SapientPro\EbayTraditionalSDK\Metadata\Enums\CompatibilityTypeEnum;
use SapientPro\EbayTraditionalSDK\Metadata\Enums\CompatibleVehicleTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $categoryId
 * @property string $categoryTreeId
 * @property CompatibilityTypeEnum $compatibilityBasedOn
 * @property CompatibleVehicleTypeEnum[] $compatibleVehicleTypes
 * @property int $maxNumberOfCompatibleVehicles
 */
class AutomotivePartsCompatibilityPolicy extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'categoryId'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'categoryTreeId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeId',
            ],
            'compatibilityBasedOn'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'compatibilityBasedOn',
            ],
            'compatibleVehicleTypes'        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'compatibleVehicleTypes',
            ],
            'maxNumberOfCompatibleVehicles' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxNumberOfCompatibleVehicles',
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
