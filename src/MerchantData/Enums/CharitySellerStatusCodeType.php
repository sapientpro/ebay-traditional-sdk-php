<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class CharitySellerStatusCodeType
{
    public const C_CLOSED = 'Closed';
    public const C_CREDIT_CARD_ABOUT_TO_EXPIRE = 'CreditCardAboutToExpire';
    public const C_CREDIT_CARD_EXPIRED = 'CreditCardExpired';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DIRECT_DEBIT_REJECTED = 'DirectDebitRejected';
    public const C_NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS = 'NotRegisteredLostDirectSellerStatus';
    public const C_REGISTERED = 'Registered';
    public const C_REGISTERED_DIRECT_SELLER = 'RegisteredDirectSeller';
    public const C_REGISTERED_NO_CREDIT_CARD = 'RegisteredNoCreditCard';
    public const C_REGISTERED_NO_PAYMENT_METHOD = 'RegisteredNoPaymentMethod';
    public const C_SUSPENDED = 'Suspended';
    public const C_TOKEN_EXPIRED = 'TokenExpired';
}
