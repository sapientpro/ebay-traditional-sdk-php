<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Catalog\Enums\AspectDataTypeEnum;
use SapientPro\EbayTraditionalSDK\Catalog\Enums\AspectModeEnum;
use SapientPro\EbayTraditionalSDK\Catalog\Enums\ItemToAspectCardinalityEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AspectDataTypeEnum $aspectDataType
 * @property string $aspectFormat
 * @property AspectModeEnum $aspectMode
 * @property bool $aspectRequired
 * @property ItemToAspectCardinalityEnum $productToAspectCardinality
 */
class ProductAspectConstraint extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'aspectDataType'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectDataType',
            ],
            'aspectFormat'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectFormat',
            ],
            'aspectMode'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectMode',
            ],
            'aspectRequired'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectRequired',
            ],
            'productToAspectCardinality' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productToAspectCardinality',
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
