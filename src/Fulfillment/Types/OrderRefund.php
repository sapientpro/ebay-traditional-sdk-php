<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\RefundStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $amount
 * @property string $refundDate
 * @property string $refundReferenceId
 * @property RefundStatusEnum $refundStatus
 */
class OrderRefund extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'amount'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amount',
            ],
            'refundDate'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundDate',
            ],
            'refundReferenceId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundReferenceId',
            ],
            'refundStatus'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundStatus',
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
