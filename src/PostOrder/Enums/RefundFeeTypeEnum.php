<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class RefundFeeTypeEnum
{
    public const C_DOMESTIC_SHIPPING = 'DOMESTIC_SHIPPING';
    public const C_IMPORT_CHARGE = 'IMPORT_CHARGE';
    public const C_INTERNATIONAL_SHIPPING = 'INTERNATIONAL_SHIPPING';
    public const C_ORDER_ADJUSTMENT = 'ORDER_ADJUSTMENT';
    public const C_ORIGINAL_SHIPPING = 'ORIGINAL_SHIPPING';
    public const C_OTHER = 'OTHER';
    public const C_PURCHASE_PRICE = 'PURCHASE_PRICE';
    public const C_REFUND_FROM_PAYPAL = 'REFUND_FROM_PAYPAL';
    public const C_RESTOCKING_FEE = 'RESTOCKING_FEE';
    public const C_RETURN_SHIPPING = 'RETURN_SHIPPING';
}
