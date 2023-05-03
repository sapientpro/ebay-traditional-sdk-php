<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Taxonomy\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MarketplaceIdEnum[] $applicableMarketplaceIds
 * @property string $categoryTreeId
 * @property string $categoryTreeVersion
 * @property CategoryTreeNode $rootCategoryNode
 */
class CategoryTree extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'applicableMarketplaceIds' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'applicableMarketplaceIds',
            ],
            'categoryTreeId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeId',
            ],
            'categoryTreeVersion'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeVersion',
            ],
            'rootCategoryNode'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Taxonomy\Types\CategoryTreeNode',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'rootCategoryNode',
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
