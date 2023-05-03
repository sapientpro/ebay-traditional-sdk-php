<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class CheckoutStatusCodeType
{
    public const C_BUYER_REQUESTS_TOTAL = 'BuyerRequestsTotal';
    public const C_CHECKOUT_COMPLETE = 'CheckoutComplete';
    public const C_CHECKOUT_INCOMPLETE = 'CheckoutIncomplete';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_SELLER_RESPONDED = 'SellerResponded';
}
