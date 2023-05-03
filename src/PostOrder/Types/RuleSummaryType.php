<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $count
 * @property int $countInTestMode
 * @property RuleActionDetailType $invalidAction
 * @property RuleConditionDetailType[] $invalidConditions
 * @property \DateTime $lastModifiedDate
 * @property int $priority
 */
class RuleSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'count'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'count',
            ],
            'countInTestMode'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'countInTestMode',
            ],
            'invalidAction'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleActionDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'invalidAction',
            ],
            'invalidConditions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleConditionDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'invalidConditions',
            ],
            'lastModifiedDate'  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastModifiedDate',
            ],
            'priority'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priority',
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
