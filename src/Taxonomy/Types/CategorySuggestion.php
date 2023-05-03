<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Category $category
 * @property AncestorReference[] $categoryTreeNodeAncestors
 * @property int $categoryTreeNodeLevel
 * @property string $relevancy
 */
class CategorySuggestion extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'category'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\Category',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'categoryTreeNodeAncestors' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\AncestorReference',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryTreeNodeAncestors',
            ],
            'categoryTreeNodeLevel'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeNodeLevel',
            ],
            'relevancy'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'relevancy',
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
