<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class ReturnStateEnum
{
    public const C_AUTO_REFUND_INITIATED = 'AUTO_REFUND_INITIATED';
    public const C_CLOSED = 'CLOSED';
    public const C_INITIAL = 'INITIAL';
    public const C_ITEM_DELIVERED = 'ITEM_DELIVERED';
    public const C_ITEM_KEPT = 'ITEM_KEPT';
    public const C_ITEM_READY_TO_SHIP = 'ITEM_READY_TO_SHIP';
    public const C_ITEM_SHIPPED = 'ITEM_SHIPPED';
    public const C_LESS_THAN_A_FULL_REFUND_ISSUED = 'LESS_THAN_A_FULL_REFUND_ISSUED';
    public const C_PARTIAL_REFUNDED = 'PARTIAL_REFUNDED';
    public const C_PARTIAL_REFUND_DECLINED = 'PARTIAL_REFUND_DECLINED';
    public const C_PARTIAL_REFUND_FAILED = 'PARTIAL_REFUND_FAILED';
    public const C_PARTIAL_REFUND_INITIATED = 'PARTIAL_REFUND_INITIATED';
    public const C_PARTIAL_REFUND_NON_PAYPAL_INITIATED = 'PARTIAL_REFUND_NON_PAYPAL_INITIATED';
    public const C_PARTIAL_REFUND_REQUESTED = 'PARTIAL_REFUND_REQUESTED';
    public const C_PAYOUT_INITIATED = 'PAYOUT_INITIATED';
    public const C_REFUND_INITIATED = 'REFUND_INITIATED';
    public const C_REFUND_SENT_PENDING_CONFIRMATION = 'REFUND_SENT_PENDING_CONFIRMATION';
    public const C_REFUND_TIMEOUT = 'REFUND_TIMEOUT';
    public const C_REPLACED = 'REPLACED';
    public const C_REPLACEMENT_CLOSED = 'REPLACEMENT_CLOSED';
    public const C_REPLACEMENT_DELIVERED = 'REPLACEMENT_DELIVERED';
    public const C_REPLACEMENT_LABEL_REQUESTED = 'REPLACEMENT_LABEL_REQUESTED';
    public const C_REPLACEMENT_LABEL_REQUESTED_TIMEOUT = 'REPLACEMENT_LABEL_REQUESTED_TIMEOUT';
    public const C_REPLACEMENT_REQUESTED = 'REPLACEMENT_REQUESTED';
    public const C_REPLACEMENT_REQUEST_TIMEOUT = 'REPLACEMENT_REQUEST_TIMEOUT';
    public const C_REPLACEMENT_RMA_PENDING = 'REPLACEMENT_RMA_PENDING';
    public const C_REPLACEMENT_SHIPPED = 'REPLACEMENT_SHIPPED';
    public const C_REPLACEMENT_STARTED = 'REPLACEMENT_STARTED';
    public const C_RETURN_LABEL_PENDING = 'RETURN_LABEL_PENDING';
    public const C_RETURN_LABEL_PENDING_TIMEOUT = 'RETURN_LABEL_PENDING_TIMEOUT';
    public const C_RETURN_LABEL_REQUESTED = 'RETURN_LABEL_REQUESTED';
    public const C_RETURN_LABEL_REQUESTED_TIMEOUT = 'RETURN_LABEL_REQUESTED_TIMEOUT';
    public const C_RETURN_REJECTED = 'RETURN_REJECTED';
    public const C_RETURN_REQUESTED = 'RETURN_REQUESTED';
    public const C_RETURN_REQUEST_TIMEOUT = 'RETURN_REQUEST_TIMEOUT';
    public const C_RMA_PENDING = 'RMA_PENDING';
    public const C_UNKNOWN = 'UNKNOWN';
}