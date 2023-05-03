<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class PaidStatusCodeType
{
    public const C_BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';
    public const C_MARKED_AS_PAID = 'MarkedAsPaid';
    public const C_NOT_PAID = 'NotPaid';
    public const C_PAID = 'Paid';
    public const C_PAIDCOD = 'PaidCOD';
    public const C_PAID_WITH_ESCROW = 'PaidWithEscrow';
    public const C_PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';
    public const C_PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';
    public const C_PAID_WITH_PAY_PAL = 'PaidWithPayPal';
    public const C_PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';
    public const C_PAYMENT_PENDING = 'PaymentPending';
    public const C_PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';
    public const C_PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';
    public const C_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';
    public const C_PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';
    public const C_PAY_UPON_INVOICE = 'PayUponInvoice';
    public const C_REFUNDED = 'Refunded';
    public const C_WAITING_FORCOD_PAYMENT = 'WaitingForCODPayment';
}
