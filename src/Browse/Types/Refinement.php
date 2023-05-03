<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AspectDistribution[] $aspectDistributions
 * @property BuyingOptionDistribution[] $buyingOptionDistributions
 * @property CategoryDistribution[] $categoryDistributions
 * @property ConditionDistribution[] $conditionDistributions
 * @property string $dominantCategoryId
 */
class Refinement extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'aspectDistributions'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\AspectDistribution',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspectDistributions',
            ],
            'buyingOptionDistributions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\BuyingOptionDistribution',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'buyingOptionDistributions',
            ],
            'categoryDistributions'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\CategoryDistribution',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryDistributions',
            ],
            'conditionDistributions'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConditionDistribution',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'conditionDistributions',
            ],
            'dominantCategoryId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dominantCategoryId',
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
