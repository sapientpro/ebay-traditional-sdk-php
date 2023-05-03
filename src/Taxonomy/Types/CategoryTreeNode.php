<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Category $category
 * @property int $categoryTreeNodeLevel
 * @property CategoryTreeNode[] $childCategoryTreeNodes
 * @property bool $leafCategoryTreeNode
 * @property string $parentCategoryTreeNodeHref
 */
class CategoryTreeNode extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'category'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\Category',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'categoryTreeNodeLevel'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeNodeLevel',
            ],
            'childCategoryTreeNodes'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\CategoryTreeNode',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'childCategoryTreeNodes',
            ],
            'leafCategoryTreeNode'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'leafCategoryTreeNode',
            ],
            'parentCategoryTreeNodeHref' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'parentCategoryTreeNodeHref',
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
