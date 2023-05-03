<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class NotificationEventStateCodeType
{
    public const C_CANCELED = 'Canceled';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DELIVERED = 'Delivered';
    public const C_FAILED = 'Failed';
    public const C_FAILED_PENDING = 'FailedPending';
    public const C_MARKED_DOWN = 'MarkedDown';
    public const C_MARKED_DOWN_PENDING = 'MarkedDownPending';
    public const C_NEW = 'New';
    public const C_PENDING = 'Pending';
    public const C_REJECTED = 'Rejected';
    public const C_UNDELIVERABLE = 'Undeliverable';
}
