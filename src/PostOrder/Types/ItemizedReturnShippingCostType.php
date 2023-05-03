<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $amount
 * @property ReturnShippingCostType $returnShippingCostType
 */
class ItemizedReturnShippingCostType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'amount'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amount',
            ],
            'returnShippingCostType' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnShippingCostType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnShippingCostType',
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
