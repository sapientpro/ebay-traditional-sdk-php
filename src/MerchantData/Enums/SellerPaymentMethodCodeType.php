<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class SellerPaymentMethodCodeType
{
    public const C_CREDIT_CARD = 'CreditCard';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DIRECT_DEBIT = 'DirectDebit';
    public const C_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE = 'DirectDebitPendingSignatureMandate';
    public const C_DIRECT_DEBIT_PENDING_VERIFICATION = 'DirectDebitPendingVerification';
    public const C_E_BAY_DIRECT_PAY = 'eBayDirectPay';
    public const C_NOTHING_ON_FILE = 'NothingOnFile';
    public const C_PAY_PAL = 'PayPal';
}
