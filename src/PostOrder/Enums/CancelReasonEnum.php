<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CancelReasonEnum
{
    public const C_ADDRESS_ISSUE = 'ADDRESS_ISSUE';
    public const C_BUYER_ASKED_CANCEL = 'BUYER_ASKED_CANCEL';
    public const C_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BUYER_CANCEL_OR_ADDRESS_ISSUE';
    public const C_FOUND_CHEAPER_PRICE = 'FOUND_CHEAPER_PRICE';
    public const C_ORDER_MISTAKE = 'ORDER_MISTAKE';
    public const C_ORDER_UNPAID = 'ORDER_UNPAID';
    public const C_OTHER = 'OTHER';
    public const C_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OUT_OF_STOCK_OR_CANNOT_FULFILL';
    public const C_PRICE_TOO_HIGH = 'PRICE_TOO_HIGH';
    public const C_WONT_ARRIVE_IN_TIME = 'WONT_ARRIVE_IN_TIME';
}
