<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class RefundReasonCodeType
{
    public const C_BUYER_REMORSE = 'BuyerRemorse';
    public const C_CANNOT_SHIP_PRODUCT = 'CannotShipProduct';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ITEM_BAD_QUALITY = 'ItemBadQuality';
    public const C_ITEM_DAMAGED = 'ItemDamaged';
    public const C_OTHER = 'Other';
    public const C_WRONG_ITEM_SHIPPED = 'WrongItemShipped';
}
