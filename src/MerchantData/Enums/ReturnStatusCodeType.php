<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class ReturnStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INVALID = 'Invalid';
    public const C_NOT_APPLICABLE = 'NotApplicable';
    public const C_RETURN_CLOSED_ESCALATED = 'ReturnClosedEscalated';
    public const C_RETURN_CLOSED_NO_REFUND = 'ReturnClosedNoRefund';
    public const C_RETURN_CLOSED_WITH_REFUND = 'ReturnClosedWithRefund';
    public const C_RETURN_DELIVERED = 'ReturnDelivered';
    public const C_RETURN_ESCALATED = 'ReturnEscalated';
    public const C_RETURN_ESCALATED_CLOSED_NO_REFUND = 'ReturnEscalatedClosedNoRefund';
    public const C_RETURN_ESCALATED_CLOSED_WITH_REFUND = 'ReturnEscalatedClosedWithRefund';
    public const C_RETURN_ESCALATED_PENDINGCS = 'ReturnEscalatedPendingCS';
    public const C_RETURN_ESCALATED_PENDING_BUYER = 'ReturnEscalatedPendingBuyer';
    public const C_RETURN_ESCALATED_PENDING_SELLER = 'ReturnEscalatedPendingSeller';
    public const C_RETURN_OPEN = 'ReturnOpen';
    public const C_RETURN_REQUEST_CLOSED_NO_REFUND = 'ReturnRequestClosedNoRefund';
    public const C_RETURN_REQUEST_CLOSED_WITH_REFUND = 'ReturnRequestClosedWithRefund';
    public const C_RETURN_REQUEST_PENDING = 'ReturnRequestPending';
    public const C_RETURN_REQUEST_PENDING_APPROVAL = 'ReturnRequestPendingApproval';
    public const C_RETURN_REQUEST_REJECTED = 'ReturnRequestRejected';
    public const C_RETURN_SHIPPED = 'ReturnShipped';
}
