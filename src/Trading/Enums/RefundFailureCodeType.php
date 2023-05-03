<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class RefundFailureCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_PAYPAL_BILLING_AGREEMENT_CANCELED = 'PaypalBillingAgreementCanceled';
    public const C_PAYPAL_RISK_DECLINES_TRANSACTION = 'PaypalRiskDeclinesTransaction';
}
