<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $discount
 * @property string $message
 * @property string $promotionCode
 * @property string $promotionType
 */
class Promotion extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'discount'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discount',
            ],
            'message'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'message',
            ],
            'promotionCode' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionCode',
            ],
            'promotionType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionType',
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
