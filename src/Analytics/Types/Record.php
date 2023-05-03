<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Analytics\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Value[] $dimensionValues
 * @property Value[] $metricValues
 */
class Record extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'dimensionValues' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Value',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dimensionValues',
            ],
            'metricValues'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Value',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'metricValues',
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
