<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class PaymentStatusCodeType
{
    public const C_BUYERE_CHECK_BOUNCED = 'BuyerECheckBounced';
    public const C_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    public const C_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    public const C_PAYMENT_IN_PROCESS = 'PaymentInProcess';
    public const C_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';
}
