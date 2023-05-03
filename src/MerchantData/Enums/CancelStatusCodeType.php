<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class CancelStatusCodeType
{
    public const C_CANCEL_CLOSED_FOR_COMMITMENT = 'CancelClosedForCommitment';
    public const C_CANCEL_CLOSED_NO_REFUND = 'CancelClosedNoRefund';
    public const C_CANCEL_CLOSED_UNKNOWN_REFUND = 'CancelClosedUnknownRefund';
    public const C_CANCEL_CLOSED_WITH_REFUND = 'CancelClosedWithRefund';
    public const C_CANCEL_COMPLETE = 'CancelComplete';
    public const C_CANCEL_FAILED = 'CancelFailed';
    public const C_CANCEL_PENDING = 'CancelPending';
    public const C_CANCEL_REJECTED = 'CancelRejected';
    public const C_CANCEL_REQUESTED = 'CancelRequested';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INVALID = 'Invalid';
    public const C_NOT_APPLICABLE = 'NotApplicable';
}
