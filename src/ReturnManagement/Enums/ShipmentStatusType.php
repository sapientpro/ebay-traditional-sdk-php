<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Enums;

class ShipmentStatusType
{
    public const C_ITEM_DELIVERED = 'ITEM_DELIVERED';
    public const C_ITEM_SHIPPED = 'ITEM_SHIPPED';
    public const C_OTHER = 'OTHER';
    public const C_READY_FOR_SHIPPING = 'READY_FOR_SHIPPING';
    public const C_WAITING_FOR_SELLER_INFO = 'WAITING_FOR_SELLER_INFO';
}
