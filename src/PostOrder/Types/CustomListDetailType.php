<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CustomListDataType[] $listData
 * @property int $listId
 * @property string $listName
 * @property CustomListType $listType
 */
class CustomListDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'listData' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\CustomListDataType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'listData',
            ],
            'listId'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listId',
            ],
            'listName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listName',
            ],
            'listType' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\CustomListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listType',
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
