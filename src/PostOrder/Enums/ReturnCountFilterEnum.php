<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class ReturnCountFilterEnum
{
    public const C_ALL_OPEN = 'ALL_OPEN';
    public const C_ALL_OPEN_REPLACEMENT = 'ALL_OPEN_REPLACEMENT';
    public const C_ALL_OPEN_RETURN = 'ALL_OPEN_RETURN';
    public const C_CLOSED = 'CLOSED';
    public const C_ITEM_DELIVERED = 'ITEM_DELIVERED';
    public const C_ITEM_SHIPPED = 'ITEM_SHIPPED';
    public const C_RETURN_STARTED = 'RETURN_STARTED';
    public const C_UNKNOWN = 'UNKNOWN';
}
