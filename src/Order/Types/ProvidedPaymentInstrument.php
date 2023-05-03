<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentInstrumentReference $paymentInstrumentReference
 * @property PaymentMethodBrand $paymentMethodBrand
 * @property PaymentMethodTypeEnum $paymentMethodType
 */
class ProvidedPaymentInstrument extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'paymentInstrumentReference' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PaymentInstrumentReference',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentInstrumentReference',
            ],
            'paymentMethodBrand'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PaymentMethodBrand',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMethodBrand',
            ],
            'paymentMethodType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMethodType',
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
