<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ConditionListDetailType $dataList
 * @property bool $isChecked
 * @property bool $isEbayPlus
 * @property bool $isInvalid
 * @property bool $storeCategory
 * @property int $storeId
 */
class RuleConditionDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'dataList'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ConditionListDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dataList',
            ],
            'isChecked'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isChecked',
            ],
            'isEbayPlus'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isEbayPlus',
            ],
            'isInvalid'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'isInvalid',
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
