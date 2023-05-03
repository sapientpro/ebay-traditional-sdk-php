<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Enums;

class PaymentMethodTypeEnum
{
    public const C_CASHIER_CHECK = 'CASHIER_CHECK';
    public const C_CASH_IN_PERSON = 'CASH_IN_PERSON';
    public const C_CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';
    public const C_CASH_ON_PICKUP = 'CASH_ON_PICKUP';
    public const C_CREDIT_CARD = 'CREDIT_CARD';
    public const C_ESCROW = 'ESCROW';
    public const C_INTEGRATED_MERCHANT_CREDIT_CARD = 'INTEGRATED_MERCHANT_CREDIT_CARD';
    public const C_LOAN_CHECK = 'LOAN_CHECK';
    public const C_MONEY_ORDER = 'MONEY_ORDER';
    public const C_OTHER = 'OTHER';
    public const C_PAISA_PAY = 'PAISA_PAY';
    public const C_PAISA_PAY_ESCROW = 'PAISA_PAY_ESCROW';
    public const C_PAISA_PAY_ESCROW_EMI = 'PAISA_PAY_ESCROW_EMI';
    public const C_PAYPAL = 'PAYPAL';
    public const C_PERSONAL_CHECK = 'PERSONAL_CHECK';
}
