<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\CategoryScopeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string[] $brands
 * @property string[] $categoryIds
 * @property CategoryScopeEnum $categoryScope
 * @property string[] $listingConditionIds
 * @property Amount $maxPrice
 * @property Amount $minPrice
 */
class SelectionRule extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'brands'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'brands',
            ],
            'categoryIds'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryIds',
            ],
            'categoryScope'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryScope',
            ],
            'listingConditionIds' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'listingConditionIds',
            ],
            'maxPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxPrice',
            ],
            'minPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minPrice',
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
