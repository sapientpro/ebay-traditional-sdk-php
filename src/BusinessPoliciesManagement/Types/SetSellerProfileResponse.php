<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use function array_key_exists;

/**
 * @property PaymentProfile $paymentProfile
 * @property ReturnPolicyProfile $returnPolicyProfile
 * @property ShippingPolicyProfile $shippingPolicyProfile
 */
class SetSellerProfileResponse extends BaseResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'paymentProfile'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\PaymentProfile',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentProfile',
            ],
            'returnPolicyProfile'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPolicyProfile',
            ],
            'shippingPolicyProfile' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingPolicyProfile',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
