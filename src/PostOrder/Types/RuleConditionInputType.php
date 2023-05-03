<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ListDataType[] $dataList
 * @property ConditionDataRangeType $dataRange
 * @property bool $isEbayPlus
 * @property bool $storeCategory
 * @property int $storeId
 */
class RuleConditionInputType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'dataList'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ListDataType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dataList',
            ],
            'dataRange'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ConditionDataRangeType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dataRange',
            ],
            'isEbayPlus'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isEbayPlus',
            ],
            'storeCategory' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'storeCategory',
            ],
            'storeId'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'storeId',
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
