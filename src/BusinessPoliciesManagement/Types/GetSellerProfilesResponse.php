<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use function array_key_exists;

/**
 * @property PaymentProfileList $paymentProfileList
 * @property ReturnPolicyProfileList $returnPolicyProfileList
 * @property ShippingPolicyProfileList $shippingPolicyProfile
 */
class GetSellerProfilesResponse extends BaseResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'paymentProfileList'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\PaymentProfileList',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentProfileList',
            ],
            'returnPolicyProfileList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ReturnPolicyProfileList',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPolicyProfileList',
            ],
            'shippingPolicyProfile'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ShippingPolicyProfileList',
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
