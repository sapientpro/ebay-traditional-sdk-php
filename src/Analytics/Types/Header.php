<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Analytics\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Definition[] $dimensionKeys
 * @property Definition[] $metrics
 */
class Header extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'dimensionKeys' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Definition',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dimensionKeys',
            ],
            'metrics'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Definition',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'metrics',
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
