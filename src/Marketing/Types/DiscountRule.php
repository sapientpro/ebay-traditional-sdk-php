<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DiscountBenefit $discountBenefit
 * @property DiscountSpecification $discountSpecification
 * @property int $ruleOrder
 */
class DiscountRule extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'discountBenefit'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\DiscountBenefit',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountBenefit',
            ],
            'discountSpecification' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\DiscountSpecification',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountSpecification',
            ],
            'ruleOrder'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ruleOrder',
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
