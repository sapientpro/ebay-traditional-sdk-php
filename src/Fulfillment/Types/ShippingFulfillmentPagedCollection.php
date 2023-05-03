<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ShippingFulfillment[] $fulfillments
 * @property int $total
 * @property ErrorDetailV3[] $warnings
 */
class ShippingFulfillmentPagedCollection extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'fulfillments' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\ShippingFulfillment',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'fulfillments',
            ],
            'total'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'total',
            ],
            'warnings'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
