<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ViolationAspectValues[] $aspectsValues
 * @property ViolationProductAttribute $productAttribute
 * @property int $reason
 * @property int $violationCode
 */
class Violation extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'aspectsValues'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ViolationAspectValues',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspectsValues',
            ],
            'productAttribute' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ViolationProductAttribute',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productAttribute',
            ],
            'reason'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reason',
            ],
            'violationCode'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'violationCode',
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
