<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class PickupStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INVALID = 'Invalid';
    public const C_NOT_APPLICABLE = 'NotApplicable';
    public const C_PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';
    public const C_PICKEDUP = 'Pickedup';
    public const C_PICKUP_CANCELLED = 'PickupCancelled';
    public const C_PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';
    public const C_PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';
    public const C_PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';
    public const C_READY_TO_PICKUP = 'ReadyToPickup';
}
