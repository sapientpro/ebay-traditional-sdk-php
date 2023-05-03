<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $amount
 * @property TimeDuration $dueIn
 * @property PaymentMethod[] $paymentMethods
 */
class Deposit extends BaseType
{
    private static array $propertyTypes = [
            'amount'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amount',
            ],
            'dueIn'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TimeDuration',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dueIn',
            ],
            'paymentMethods' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\PaymentMethod',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentMethods',
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
