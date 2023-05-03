<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CustomListDetailType $customListDetail
 * @property bool $forceDelete
 * @property CustomListModificationType $operation
 */
class ModifyCustomListRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'customListDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\CustomListDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'customListDetail',
            ],
            'forceDelete'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'forceDelete',
            ],
            'operation'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\CustomListModificationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'operation',
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
