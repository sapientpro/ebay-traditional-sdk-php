<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\PaymentModeTypeEnum;
use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\PaymentStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $amount
 * @property string $paymentDate
 * @property PaymentHold[] $paymentHolds
 * @property PaymentMethodTypeEnum $paymentMethod
 * @property PaymentModeTypeEnum $paymentMode
 * @property string $paymentReferenceId
 * @property PaymentStatusEnum $paymentStatus
 */
class Payment extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'amount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amount',
            ],
            'paymentDate'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentDate',
            ],
            'paymentHolds'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\PaymentHold',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentHolds',
            ],
            'paymentMethod'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMethod',
            ],
            'paymentMode'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMode',
            ],
            'paymentReferenceId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentReferenceId',
            ],
            'paymentStatus'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentStatus',
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
