<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class DoubleType extends \SapientPro\EbayTraditionalSDK\Types\DoubleType
{
    private static $propertyTypes = [];

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

        $this->setValues(__CLASS__, $childValues);
    }
}
