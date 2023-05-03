<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CategoryTreeNode $categorySubtreeNode
 * @property string $categoryTreeId
 * @property string $categoryTreeVersion
 */
class CategorySubtree extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'categorySubtreeNode' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\CategoryTreeNode',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categorySubtreeNode',
            ],
            'categoryTreeId'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeId',
            ],
            'categoryTreeVersion' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeVersion',
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
