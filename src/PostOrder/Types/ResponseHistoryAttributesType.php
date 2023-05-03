<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $carrierUsed
 * @property string $escalateReason
 * @property MoneyMovementRef $moneyMovementRef
 * @property Amount $partialRefundAmount
 * @property string $RMA
 * @property ReturnAddressType $sellerReturnAddress
 * @property string $toEmailAddress
 * @property string $trackingNumber
 */
class ResponseHistoryAttributesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'carrierUsed'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierUsed',
            ],
            'escalateReason'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalateReason',
            ],
            'moneyMovementRef'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\MoneyMovementRef',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'moneyMovementRef',
            ],
            'partialRefundAmount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'partialRefundAmount',
            ],
            'RMA'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RMA',
            ],
            'sellerReturnAddress' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerReturnAddress',
            ],
            'toEmailAddress'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'toEmailAddress',
            ],
            'trackingNumber'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
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
