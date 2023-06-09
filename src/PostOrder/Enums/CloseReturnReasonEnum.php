<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CloseReturnReasonEnum
{
    public const C_AUTO_PARTIAL_REFUNDED = 'AUTO_PARTIAL_REFUNDED';
    public const C_AUTO_REFUNDED = 'AUTO_REFUNDED';
    public const C_BUYER_CLOSED = 'BUYER_CLOSED';
    public const C_BUYER_PAYOUT = 'BUYER_PAYOUT';
    public const C_BUYER_PAYOUT_FAILED = 'BUYER_PAYOUT_FAILED';
    public const C_ESCALATED = 'ESCALATED';
    public const C_FULL_REFUNDED = 'FULL_REFUNDED';
    public const C_FULL_REFUNDED_BY_DISPOSITION_RULE = 'FULL_REFUNDED_BY_DISPOSITION_RULE';
    public const C_MARK_PARTIAL_REFUND_RECEIVED = 'MARK_PARTIAL_REFUND_RECEIVED';
    public const C_MARK_REFUND_RECEIVED = 'MARK_REFUND_RECEIVED';
    public const C_MARK_REFUND_RECEIVED_TIMEOUT = 'MARK_REFUND_RECEIVED_TIMEOUT';
    public const C_OTHER = 'OTHER';
    public const C_PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';
    public const C_REFUND_TIMEOUT = 'REFUND_TIMEOUT';
    public const C_REPLACED = 'REPLACED';
    public const C_REPLACEMENT_PAYOUT_RECOUP = 'REPLACEMENT_PAYOUT_RECOUP';
    public const C_REQUEST_DECLINED = 'REQUEST_DECLINED';
    public const C_REQUEST_TIMEOUT = 'REQUEST_TIMEOUT';
    public const C_RETURN_REJECTED = 'RETURN_REJECTED';
    public const C_SELLER_INVOICED = 'SELLER_INVOICED';
    public const C_SELLER_PAYOUT_FAILED = 'SELLER_PAYOUT_FAILED';
    public const C_SHIPMENT_TIMEOUT = 'SHIPMENT_TIMEOUT';
    public const C_STORE_CREDIT_REFUNDED = 'STORE_CREDIT_REFUNDED';
}
