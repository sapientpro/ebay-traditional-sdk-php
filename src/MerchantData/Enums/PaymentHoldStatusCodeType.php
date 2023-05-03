<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class PaymentHoldStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_MERCHANT_HOLD = 'MerchantHold';
    public const C_NEW_SELLER_HOLD = 'NewSellerHold';
    public const C_NONE = 'None';
    public const C_PAYMENT_HOLD = 'PaymentHold';
    public const C_PAYMENT_REVIEW = 'PaymentReview';
    public const C_RELEASED = 'Released';
    public const C_RELEASE_CONFIRMED = 'ReleaseConfirmed';
    public const C_RELEASE_FAILED = 'ReleaseFailed';
    public const C_RELEASE_PENDING = 'ReleasePending';
}
