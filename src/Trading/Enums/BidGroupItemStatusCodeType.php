<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class BidGroupItemStatusCodeType
{
    public const C_CANCELLED = 'Cancelled';
    public const C_CURRENT_BID = 'CurrentBid';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ENDED = 'Ended';
    public const C_GROUP_CLOSED = 'GroupClosed';
    public const C_PENDING = 'Pending';
    public const C_SKIPPED = 'Skipped';
    public const C_WON = 'Won';
}
