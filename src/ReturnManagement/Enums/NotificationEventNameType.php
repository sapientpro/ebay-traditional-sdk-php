<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Enums;

class NotificationEventNameType
{
    public const C_RETURN_CLOSED = 'ReturnClosed';
    public const C_RETURN_CREATED = 'ReturnCreated';
    public const C_RETURN_DELIVERED = 'ReturnDelivered';
    public const C_RETURN_ESCALATED = 'ReturnEscalated';
    public const C_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    public const C_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
    public const C_RETURN_SHIPPED = 'ReturnShipped';
    public const C_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
}
