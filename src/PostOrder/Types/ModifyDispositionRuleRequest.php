<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property RuleModificationType $operation
 * @property PriorityListType $priorityList
 * @property RuleDetailInputType $ruleDetail
 * @property int $versionId
 */
class ModifyDispositionRuleRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'operation'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleModificationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'operation',
            ],
            'priorityList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\PriorityListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priorityList',
            ],
            'ruleDetail'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RuleDetailInputType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ruleDetail',
            ],
            'versionId'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'versionId',
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
