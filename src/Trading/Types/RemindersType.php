<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $PaymentToSendCount
 * @property int $FeedbackToReceiveCount
 * @property int $FeedbackToSendCount
 * @property int $OutbidCount
 * @property int $PaymentToReceiveCount
 * @property int $SecondChanceOfferCount
 * @property int $ShippingNeededCount
 * @property int $RelistingNeededCount
 * @property int $TotalNewLeadsCount
 * @property int $DocsForCCProcessingToSendCount
 * @property int $RTEToProcessCount
 * @property int $ItemReceiptToConfirmCount
 * @property int $RefundOnHoldCount
 * @property int $RefundCancelledCount
 * @property int $ShippingDetailsToBeProvidedCount
 * @property int $ItemReceiptConfirmationToReceiveCount
 * @property int $RefundInitiatedCount
 * @property int $PendingRTERequestCount
 * @property int $DeclinedRTERequestCount
 */
class RemindersType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaymentToSendCount'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentToSendCount',
            ],
            'FeedbackToReceiveCount'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackToReceiveCount',
            ],
            'FeedbackToSendCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackToSendCount',
            ],
            'OutbidCount'                           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OutbidCount',
            ],
            'PaymentToReceiveCount'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentToReceiveCount',
            ],
            'SecondChanceOfferCount'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondChanceOfferCount',
            ],
            'ShippingNeededCount'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingNeededCount',
            ],
            'RelistingNeededCount'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistingNeededCount',
            ],
            'TotalNewLeadsCount'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalNewLeadsCount',
            ],
            'DocsForCCProcessingToSendCount'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DocsForCCProcessingToSendCount',
            ],
            'RTEToProcessCount'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RTEToProcessCount',
            ],
            'ItemReceiptToConfirmCount'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemReceiptToConfirmCount',
            ],
            'RefundOnHoldCount'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundOnHoldCount',
            ],
            'RefundCancelledCount'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundCancelledCount',
            ],
            'ShippingDetailsToBeProvidedCount'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetailsToBeProvidedCount',
            ],
            'ItemReceiptConfirmationToReceiveCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemReceiptConfirmationToReceiveCount',
            ],
            'RefundInitiatedCount'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundInitiatedCount',
            ],
            'PendingRTERequestCount'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PendingRTERequestCount',
            ],
            'DeclinedRTERequestCount'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeclinedRTERequestCount',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
