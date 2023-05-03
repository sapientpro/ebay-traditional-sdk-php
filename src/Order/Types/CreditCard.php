<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $accountHolderName
 * @property BillingAddress $billingAddress
 * @property string $brand
 * @property string $cardNumber
 * @property string $cvvNumber
 * @property int $expireMonth
 * @property int $expireYear
 */
class CreditCard extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'accountHolderName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'accountHolderName',
            ],
            'billingAddress'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\BillingAddress',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'billingAddress',
            ],
            'brand'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'brand',
            ],
            'cardNumber'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cardNumber',
            ],
            'cvvNumber'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cvvNumber',
            ],
            'expireMonth'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expireMonth',
            ],
            'expireYear'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expireYear',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
