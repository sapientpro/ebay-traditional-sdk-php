<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $sellerRegistrationCompleted
 * @property SellingLimit $sellingLimit
 */
class SellingPrivileges extends BaseType
{
    private static array $propertyTypes = [
            'sellerRegistrationCompleted' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerRegistrationCompleted',
            ],
            'sellingLimit'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\SellingLimit',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellingLimit',
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
