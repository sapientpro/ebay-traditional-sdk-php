<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AspectConstraint $aspectConstraint
 * @property AspectValue[] $aspectValues
 * @property string $localizedAspectName
 */
class Aspect extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'aspectConstraint'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\AspectConstraint',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectConstraint',
            ],
            'aspectValues'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\AspectValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspectValues',
            ],
            'localizedAspectName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'localizedAspectName',
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
