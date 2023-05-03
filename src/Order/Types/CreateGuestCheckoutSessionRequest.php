<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $contactEmail
 * @property string $contactFirstName
 * @property string $contactLastName
 * @property CreditCard $creditCard
 * @property LineItemInput[] $lineItemInputs
 * @property ShippingAddress $shippingAddress
 */
class CreateGuestCheckoutSessionRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'contactEmail'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'contactEmail',
            ],
            'contactFirstName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'contactFirstName',
            ],
            'contactLastName'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'contactLastName',
            ],
            'creditCard'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\CreditCard',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creditCard',
            ],
            'lineItemInputs'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\LineItemInput',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItemInputs',
            ],
            'shippingAddress'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\ShippingAddress',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingAddress',
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
