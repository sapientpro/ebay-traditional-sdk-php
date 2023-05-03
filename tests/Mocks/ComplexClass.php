<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class ComplexClass extends SimpleClass
{
    private static array $propertyTypes
        = [
            'foo'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'foo',
            ],
            'AmountClass'   => [
                'type'        => AmountClass::class,
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountClass',
            ],
            'simpleClasses' => [
                'type'        => SimpleClass::class,
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'simpleClasses',
            ],
        ];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="https://gitlab.sapient.pro/autopilot-internal/ebay-traditional-sdk"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'root';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
