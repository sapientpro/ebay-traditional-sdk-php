<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CancelStatusEnum
{
    public const C_CANCEL_CLOSED_FOR_COMMITMENT = 'CANCEL_CLOSED_FOR_COMMITMENT';
    public const C_CANCEL_CLOSED_NO_REFUND = 'CANCEL_CLOSED_NO_REFUND';
    public const C_CANCEL_CLOSED_UNKNOWN_REFUND = 'CANCEL_CLOSED_UNKNOWN_REFUND';
    public const C_CANCEL_CLOSED_WITH_REFUND = 'CANCEL_CLOSED_WITH_REFUND';
    public const C_CANCEL_PENDING = 'CANCEL_PENDING';
    public const C_CANCEL_REJECTED = 'CANCEL_REJECTED';
    public const C_CANCEL_REQUESTED = 'CANCEL_REQUESTED';
    public const C_INVALID = 'INVALID';
}
