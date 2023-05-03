<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class AmountClass extends \SapientPro\EbayTraditionalSDK\Types\DoubleType
{
    private static $propertyTypes
        = [
            'AttributeOne' => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'AttributeOne',
            ],
            'AttributeTwo' => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'AttributeTwo',
            ],
        ];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="https://gitlab.sapient.pro/autopilot-internal/ebay-traditional-sdk"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'Price';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
