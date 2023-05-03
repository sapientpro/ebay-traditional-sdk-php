<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class OrderStatusCodeType
{
    public const C_ACTIVE = 'Active';
    public const C_ALL = 'All';
    public const C_AUTHENTICATED = 'Authenticated';
    public const C_CANCELLED = 'Cancelled';
    public const C_CANCEL_PENDING = 'CancelPending';
    public const C_COMPLETED = 'Completed';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DEFAULT = 'Default';
    public const C_INACTIVE = 'Inactive';
    public const C_INVALID = 'Invalid';
    public const C_IN_PROCESS = 'InProcess';
    public const C_SHIPPED = 'Shipped';
}
