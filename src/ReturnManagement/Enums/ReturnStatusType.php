<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Enums;

class ReturnStatusType
{
    public const C_CLOSED = 'CLOSED';
    public const C_ESCALATED = 'ESCALATED';
    public const C_ITEM_DELIVERED = 'ITEM_DELIVERED';
    public const C_ITEM_SHIPPED = 'ITEM_SHIPPED';
    public const C_READY_FOR_SHIPPING = 'READY_FOR_SHIPPING';
    public const C_UNKNOWN = 'UNKNOWN';
    public const C_WAITING_FOR_SELLER_INFO = 'WAITING_FOR_SELLER_INFO';
}
