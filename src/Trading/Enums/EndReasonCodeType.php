<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class EndReasonCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INCORRECT = 'Incorrect';
    public const C_LOST_OR_BROKEN = 'LostOrBroken';
    public const C_NOT_AVAILABLE = 'NotAvailable';
    public const C_OTHER_LISTING_ERROR = 'OtherListingError';
    public const C_SELL_TO_HIGH_BIDDER = 'SellToHighBidder';
    public const C_SOLD = 'Sold';
}
