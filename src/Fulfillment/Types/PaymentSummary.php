<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Payment[] $payments
 * @property OrderRefund[] $refunds
 * @property Amount $totalDueSeller
 */
class PaymentSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'payments'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Payment',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'payments',
            ],
            'refunds'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\OrderRefund',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'refunds',
            ],
            'totalDueSeller' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'totalDueSeller',
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
