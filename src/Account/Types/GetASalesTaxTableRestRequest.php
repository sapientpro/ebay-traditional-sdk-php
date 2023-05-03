<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $countryCode
 * @property string $jurisdictionId
 */
class GetASalesTaxTableRestRequest extends BaseType
{
    private static array $propertyTypes = [
            'countryCode'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'countryCode',
            ],
            'jurisdictionId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'jurisdictionId',
            ],
    ];

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