<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $fulfillmentPolicyId
 * @property string $paymentPolicyId
 * @property string $returnPolicyId
 * @property ShippingCostOverride[] $shippingCostOverrides
 */
class ListingPolicies extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'fulfillmentPolicyId'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fulfillmentPolicyId',
            ],
            'paymentPolicyId'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentPolicyId',
            ],
            'returnPolicyId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPolicyId',
            ],
            'shippingCostOverrides' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ShippingCostOverride',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingCostOverrides',
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
