<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Enums\PurchaseOrderPaymentStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $purchaseOrderHref
 * @property string $purchaseOrderId
 * @property PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property ErrorDetailV3[] $warnings
 */
class PurchaseOrderSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'purchaseOrderHref'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseOrderHref',
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
