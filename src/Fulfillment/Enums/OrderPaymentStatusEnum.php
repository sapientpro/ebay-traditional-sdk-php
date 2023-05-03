<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Enums;

class OrderPaymentStatusEnum
{
    public const C_FAILED = 'FAILED';
    public const C_FULLY_REFUNDED = 'FULLY_REFUNDED';
    public const C_NOT_APPLICABLE = 'NOT_APPLICABLE';
    public const C_PAID = 'PAID';
    public const C_PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';
    public const C_PENDING = 'PENDING';
}
