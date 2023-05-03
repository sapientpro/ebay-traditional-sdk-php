<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $label
 * @property Image $logoImage
 * @property PaymentMethodBrand[] $paymentMethodBrands
 * @property PaymentMethodMessage[] $paymentMethodMessages
 * @property PaymentMethodTypeEnum $paymentMethodType
 */
class PaymentMethod extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'label'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'label',
            ],
            'logoImage'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Image',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'logoImage',
            ],
            'paymentMethodBrands'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PaymentMethodBrand',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentMethodBrands',
            ],
            'paymentMethodMessages' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PaymentMethodMessage',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentMethodMessages',
            ],
            'paymentMethodType'     => [
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
