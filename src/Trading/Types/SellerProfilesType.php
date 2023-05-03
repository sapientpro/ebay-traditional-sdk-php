<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SellerShippingProfileType $SellerShippingProfile
 * @property SellerReturnProfileType $SellerReturnProfile
 * @property SellerPaymentProfileType $SellerPaymentProfile
 */
class SellerProfilesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SellerShippingProfile' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerShippingProfileType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerShippingProfile',
            ],
            'SellerReturnProfile'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerReturnProfileType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerReturnProfile',
            ],
            'SellerPaymentProfile'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerPaymentProfileType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaymentProfile',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
