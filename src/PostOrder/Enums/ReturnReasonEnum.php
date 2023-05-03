<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class ReturnReasonEnum
{
    public const C_ARRIVED_DAMAGED = 'ARRIVED_DAMAGED';
    public const C_ARRIVED_LATE = 'ARRIVED_LATE';
    public const C_BUYER_CANCEL_ORDER = 'BUYER_CANCEL_ORDER';
    public const C_BUYER_NOT_SCHEDULED = 'BUYER_NOT_SCHEDULED';
    public const C_BUYER_NO_SHOW = 'BUYER_NO_SHOW';
    public const C_BUYER_REFUSED_TO_PICKUP = 'BUYER_REFUSED_TO_PICKUP';
    public const C_DEFECTIVE_ITEM = 'DEFECTIVE_ITEM';
    public const C_DIFFERENT_FROM_LISTING = 'DIFFERENT_FROM_LISTING';
    public const C_EXPIRED_ITEM = 'EXPIRED_ITEM';
    public const C_FAKE_OR_COUNTERFEIT = 'FAKE_OR_COUNTERFEIT';
    public const C_FOUND_BETTER_PRICE = 'FOUND_BETTER_PRICE';
    public const C_IN_STORE_RETURN = 'IN_STORE_RETURN';
    public const C_MISSING_PARTS = 'MISSING_PARTS';
    public const C_NOT_AS_DESCRIBED = 'NOT_AS_DESCRIBED';
    public const C_NO_LONGER_NEED_ITEM = 'NO_LONGER_NEED_ITEM';
    public const C_NO_REASON = 'NO_REASON';
    public const C_ORDERED_ACCIDENTALLY = 'ORDERED_ACCIDENTALLY';
    public const C_ORDERED_DIFFERENT_ITEM = 'ORDERED_DIFFERENT_ITEM';
    public const C_ORDERED_WRONG_ITEM = 'ORDERED_WRONG_ITEM';
    public const C_OTHER = 'OTHER';
    public const C_OUT_OF_STOCK = 'OUT_OF_STOCK';
    public const C_RETURNING_GIFT = 'RETURNING_GIFT';
    public const C_VALET_DELIVERY_ISSUES = 'VALET_DELIVERY_ISSUES';
    public const C_VALET_UNAVAILABLE = 'VALET_UNAVAILABLE';
    public const C_WRONG_SIZE = 'WRONG_SIZE';
}
