<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class PaymentDenialReasonEnum
{
    public const C_OTHER = 'OTHER';
    public const C_PP_ACH_RETURN = 'PP_ACH_RETURN';
    public const C_PP_ADMINISTRATIVE_FRAUD_REVIEW = 'PP_ADMINISTRATIVE_FRAUD_REVIEW';
    public const C_PP_CREDITCARD_CHARGEBACK = 'PP_CREDITCARD_CHARGEBACK';
    public const C_PP_DISALLOWED_DISPUTE = 'PP_DISALLOWED_DISPUTE';
    public const C_PP_ELV_REVERSAL = 'PP_ELV_REVERSAL';
    public const C_PP_PAYPAL_GUEST = 'PP_PAYPAL_GUEST';
    public const C_PP_UNAUTHORIZED_TRANSACTION = 'PP_UNAUTHORIZED_TRANSACTION';
}
