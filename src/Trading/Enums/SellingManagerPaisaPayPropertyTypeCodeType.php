<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class SellingManagerPaisaPayPropertyTypeCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_PAISA_PAY_AWAITING_SHIPMENT = 'PaisaPayAwaitingShipment';
    public const C_PAISA_PAY_PENDING_RECEIVED = 'PaisaPayPendingReceived';
    public const C_PAISA_PAY_REFUND_INITIATED = 'PaisaPayRefundInitiated';
    public const C_PAISA_PAY_TIME_EXTENSION_REQUESTED = 'PaisaPayTimeExtensionRequested';
    public const C_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED = 'PaisaPayTimeExtensionRequestDeclined';
}
