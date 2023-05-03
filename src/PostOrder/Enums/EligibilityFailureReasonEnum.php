<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class EligibilityFailureReasonEnum
{
    public const C_CANCELLATION_EXIST = 'CANCELLATION_EXIST';
    public const C_CANCEL_WINDOW_ELAPSED = 'CANCEL_WINDOW_ELAPSED';
    public const C_CASE_EXIST = 'CASE_EXIST';
    public const C_CROSS_SITE_ORDER = 'CROSS_SITE_ORDER';
    public const C_EBAY_NOW_ORDER_STATUS = 'EBAY_NOW_ORDER_STATUS';
    public const C_FULL_REFUNDED_ORDER = 'FULL_REFUNDED_ORDER';
    public const C_INSTORE_PICKUP_MADE = 'INSTORE_PICKUP_MADE';
    public const C_INTERNAL_SYSTEM_ERROR = 'INTERNAL_SYSTEM_ERROR';
    public const C_INVALID_ORDER = 'INVALID_ORDER';
    public const C_INVALID_USER = 'INVALID_USER';
    public const C_IN_STORE_PICKUP_READY = 'IN_STORE_PICKUP_READY';
    public const C_PARTIAL_REFUNDED_ORDER = 'PARTIAL_REFUNDED_ORDER';
    public const C_PAYPAL_DISPUTE_EXIST = 'PAYPAL_DISPUTE_EXIST';
    public const C_RETURN_EXIST = 'RETURN_EXIST';
    public const C_SHIPPED_ORDER = 'SHIPPED_ORDER';
    public const C_UNKNOWN = 'UNKNOWN';
    public const C_UNPAID_ORDER = 'UNPAID_ORDER';
    public const C_UNSUPPORTED_ORDER = 'UNSUPPORTED_ORDER';
    public const C_UNSUPPORTED_PAYMENT_METHOD = 'UNSUPPORTED_PAYMENT_METHOD';
    public const C_UNSUPPORTED_SITE = 'UNSUPPORTED_SITE';
}
