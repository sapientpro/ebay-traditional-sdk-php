<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeExplanationCodeType
{
    public const C_BUYER_HAS_NOT_RESPONDED = 'BuyerHasNotResponded';
    public const C_BUYER_NOT_CLEARED_TO_PAY = 'BuyerNotClearedToPay';
    public const C_BUYER_NOT_PAID = 'BuyerNotPaid';
    public const C_BUYER_NO_LONGER_REGISTERED = 'BuyerNoLongerRegistered';
    public const C_BUYER_NO_LONGER_WANTS_ITEM = 'BuyerNoLongerWantsItem';
    public const C_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED = 'BuyerPaymentNotReceivedOrCleared';
    public const C_BUYER_PURCHASING_MISTAKE = 'BuyerPurchasingMistake';
    public const C_BUYER_REFUSED_TO_PAY = 'BuyerRefusedToPay';
    public const C_BUYER_RETURNED_ITEM_FOR_REFUND = 'BuyerReturnedItemForRefund';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_OTHER_EXPLANATION = 'OtherExplanation';
    public const C_PAYMENT_METHOD_NOT_SUPPORTED = 'PaymentMethodNotSupported';
    public const C_SELLER_DOESNT_SHIP_TO_COUNTRY = 'SellerDoesntShipToCountry';
    public const C_SELLER_RAN_OUT_OF_STOCK = 'SellerRanOutOfStock';
    public const C_SHIPPING_ADDRESS_NOT_CONFIRMED = 'ShippingAddressNotConfirmed';
    public const C_SHIP_COUNTRY_NOT_SUPPORTED = 'ShipCountryNotSupported';
    public const C_UNABLE_TO_RESOLVE_TERMS = 'UnableToResolveTerms';
    public const C_UNSPECIFIED = 'Unspecified';
    public const C_UPI_ASSISTANCE = 'UPIAssistance';
    public const C_UPI_ASSISTANCE_DISABLED = 'UPIAssistanceDisabled';
}
