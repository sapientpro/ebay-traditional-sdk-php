<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class CancelReasonCodeType
{
    public const C_BUYER_CANCEL_ORDER = 'BuyerCancelOrder';
    public const C_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BuyerCancelOrAddressIssue';
    public const C_BUYER_NOT_SCHEDULE = 'BuyerNotSchedule';
    public const C_BUYER_NO_SHOW = 'BuyerNoShow';
    public const C_BUYER_REFUSED = 'BuyerRefused';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_FOUND_CHEAPER_PRICE = 'FoundCheaperPrice';
    public const C_ORDER_PLACED_BY_MISTAKE = 'OrderPlacedByMistake';
    public const C_OUT_OF_STOCK = 'OutOfStock';
    public const C_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OutOfStockOrCannotFulfill';
    public const C_PRICE_TOO_HIGH = 'PriceTooHigh';
    public const C_VALET_DELIVERY_ISSUES = 'ValetDeliveryIssues';
    public const C_VALET_UNAVAILABLE = 'ValetUnavailable';
    public const C_WONT_ARRIVE_IN_TIME = 'WontArriveInTime';
}
