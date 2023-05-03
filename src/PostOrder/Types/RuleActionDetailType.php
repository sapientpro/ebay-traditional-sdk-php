<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property RuleActionDataDetailType[] $actionData
 * @property RuleActionDataType $dataType
 * @property bool $isInvalid
 */
class RuleActionDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'actionData' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleActionDataDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'actionData',
            ],
            'dataType'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleActionDataType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dataType',
            ],
            'isInvalid'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isInvalid',
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
