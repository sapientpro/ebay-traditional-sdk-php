<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\OrderFulfillmentStatus;
use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\OrderPaymentStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Buyer $buyer
 * @property string $buyerCheckoutNotes
 * @property CancelStatus $cancelStatus
 * @property string $creationDate
 * @property string[] $fulfillmentHrefs
 * @property FulfillmentStartInstruction[] $fulfillmentStartInstructions
 * @property string $lastModifiedDate
 * @property LineItem[] $lineItems
 * @property OrderFulfillmentStatus $orderFulfillmentStatus
 * @property string $orderId
 * @property OrderPaymentStatusEnum $orderPaymentStatus
 * @property PaymentSummary $paymentSummary
 * @property PricingSummary $pricingSummary
 * @property string $sellerId
 */
class Order extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'buyer'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Buyer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyer',
            ],
            'buyerCheckoutNotes'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerCheckoutNotes',
            ],
            'cancelStatus'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\CancelStatus',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelStatus',
            ],
            'creationDate'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'fulfillmentHrefs'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'fulfillmentHrefs',
            ],
            'fulfillmentStartInstructions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\FulfillmentStartInstruction',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'fulfillmentStartInstructions',
            ],
            'lastModifiedDate'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastModifiedDate',
            ],
            'lineItems'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\LineItem',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItems',
            ],
            'orderFulfillmentStatus'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'orderFulfillmentStatus',
            ],
            'orderId'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'orderId',
            ],
            'orderPaymentStatus'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'orderPaymentStatus',
            ],
            'paymentSummary'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\PaymentSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentSummary',
            ],
            'pricingSummary'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\PricingSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingSummary',
            ],
            'sellerId'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerId',
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
