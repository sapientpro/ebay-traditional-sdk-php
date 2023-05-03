<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentMethod[] $acceptedPaymentMethods
 * @property string $checkoutSessionId
 * @property string $expirationDate
 * @property LineItem[] $lineItems
 * @property PricingSummary $pricingSummary
 * @property ProvidedPaymentInstrument $providedPaymentInstrument
 * @property ShippingAddress $shippingAddress
 * @property ErrorDetailV3[] $warnings
 */
class CheckoutSessionResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'acceptedPaymentMethods'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PaymentMethod',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'acceptedPaymentMethods',
            ],
            'checkoutSessionId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'checkoutSessionId',
            ],
            'expirationDate'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expirationDate',
            ],
            'lineItems'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\LineItem',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItems',
            ],
            'pricingSummary'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PricingSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingSummary',
            ],
            'providedPaymentInstrument' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\ProvidedPaymentInstrument',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'providedPaymentInstrument',
            ],
            'shippingAddress'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\ShippingAddress',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingAddress',
            ],
            'warnings'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
