<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class PaymentTypeCodeType
{
    public const C_ADMIN_REVERSAL = 'AdminReversal';
    public const C_ALL_OTHER = 'AllOther';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_REFUND = 'Refund';
    public const C_RENTAL_BUYOUT = 'RentalBuyout';
    public const C_RENTAL_EXTENSION = 'RentalExtension';
    public const C_SALE = 'Sale';
    public const C_SELLER_DENIED_PAYMENT = 'SellerDeniedPayment';
}
