<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class OrderStatusFilterCodeType
{
    public const C_ALL = 'All';
    public const C_AWAITING_PAYMENT = 'AwaitingPayment';
    public const C_AWAITING_SHIPMENT = 'AwaitingShipment';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_PAID_AND_SHIPPED = 'PaidAndShipped';
}
