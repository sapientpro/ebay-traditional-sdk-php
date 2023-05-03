<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class ShipmentDeliveryStatusCodeType
{
    public const C_CANCELED = 'Canceled';
    public const C_CREATED = 'Created';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DELIVERED = 'Delivered';
    public const C_DROPPED_OFF = 'DroppedOff';
    public const C_ERROR = 'Error';
    public const C_IN_TRANSIT = 'InTransit';
    public const C_LABEL_PRINTED = 'LabelPrinted';
    public const C_RETURNED = 'Returned';
    public const C_UNCONFIRMED = 'Unconfirmed';
    public const C_UNKNOWN = 'Unknown';
}
