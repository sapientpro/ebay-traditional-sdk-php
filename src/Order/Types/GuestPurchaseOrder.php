<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Enums\PurchaseOrderPaymentStatusEnum;
use SapientPro\EbayTraditionalSDK\Order\Enums\PurchaseOrderStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property LineItem[] $lineItems
 * @property PricingSummary $pricingSummary
 * @property string $purchaseOrderCreationDate
 * @property string $purchaseOrderId
 * @property PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property PurchaseOrderStatusEnum $purchaseOrderStatus
 * @property Amount $refundedAmount
 * @property ErrorDetailV3[] $warnings
 */
class GuestPurchaseOrder extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'lineItems'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\LineItem',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItems',
            ],
            'pricingSummary'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\PricingSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingSummary',
            ],
            'purchaseOrderCreationDate'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseOrderCreationDate',
            ],
            'purchaseOrderId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseOrderId',
            ],
            'purchaseOrderPaymentStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseOrderPaymentStatus',
            ],
            'purchaseOrderStatus'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseOrderStatus',
            ],
            'refundedAmount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundedAmount',
            ],
            'warnings'                   => [
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
