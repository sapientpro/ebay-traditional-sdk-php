<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Enums\LineItemPaymentStatusEnum;
use SapientPro\EbayTraditionalSDK\Order\Enums\LineItemStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Image $image
 * @property string $itemId
 * @property string $lineItemId
 * @property LineItemPaymentStatusEnum $lineItemPaymentStatus
 * @property LineItemStatusEnum $lineItemStatus
 * @property Amount $netPrice
 * @property int $quantity
 * @property Seller $seller
 * @property ShippingDetail $shippingDetail
 * @property string $title
 */
class LineItem extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'image'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Image',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'image',
            ],
            'itemId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'lineItemId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemId',
            ],
            'lineItemPaymentStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemPaymentStatus',
            ],
            'lineItemStatus'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemStatus',
            ],
            'netPrice'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'netPrice',
            ],
            'quantity'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantity',
            ],
            'seller'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\Seller',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'seller',
            ],
            'shippingDetail'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Order\Types\ShippingDetail',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingDetail',
            ],
            'title'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
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
