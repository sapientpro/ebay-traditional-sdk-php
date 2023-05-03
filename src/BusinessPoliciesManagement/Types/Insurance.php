<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $domesticInsuranceFee
 * @property string $domesticInsuranceOption
 * @property string $intlInsuranceOption
 * @property Amount $intlInsuranceFee
 */
class Insurance extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'domesticInsuranceFee'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domesticInsuranceFee',
            ],
            'domesticInsuranceOption' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domesticInsuranceOption',
            ],
            'intlInsuranceOption'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'intlInsuranceOption',
            ],
            'intlInsuranceFee'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'intlInsuranceFee',
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
