<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\PaymentInstrumentBrandEnum;
use SapientPro\EbayTraditionalSDK\Account\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentInstrumentBrandEnum[] $brands
 * @property PaymentMethodTypeEnum $paymentMethodType
 * @property RecipientAccountReference $recipientAccountReference
 */
class PaymentMethod extends BaseType
{
    private static array $propertyTypes = [
            'brands'                    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'brands',
            ],
            'paymentMethodType'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMethodType',
            ],
            'recipientAccountReference' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\RecipientAccountReference',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'recipientAccountReference',
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
