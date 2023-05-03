<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CancelActivityTypeEnum
{
    public const C_BUYER_CONFIRM_REFUND = 'BUYER_CONFIRM_REFUND';
    public const C_BUYER_CREATE_CANCEL = 'BUYER_CREATE_CANCEL';
    public const C_SELLER_APPROVE = 'SELLER_APPROVE';
    public const C_SELLER_CREATE_CANCEL = 'SELLER_CREATE_CANCEL';
    public const C_SELLER_REJECT = 'SELLER_REJECT';
    public const C_SYSTEM_NOTIFYPP_REFUND = 'SYSTEM_NOTIFYPP_REFUND';
    public const C_SYSTEM_NOTIFY_REFUND_STATUS = 'SYSTEM_NOTIFY_REFUND_STATUS';
    public const C_SYSTEM_REFUND = 'SYSTEM_REFUND';
    public const C_SYSTEM_REJECT = 'SYSTEM_REJECT';
    public const C_SYSTEM_TIMEOUT_FOR_APPROVAL = 'SYSTEM_TIMEOUT_FOR_APPROVAL';
    public const C_SYSTEM_TIMEOUT_FOR_CONFIRMATION = 'SYSTEM_TIMEOUT_FOR_CONFIRMATION';
    public const C_UNKNOWN = 'UNKNOWN';
}
