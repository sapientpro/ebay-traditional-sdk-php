<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class PaymentMethodSearchCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_PAISA_PAY = 'PaisaPay';
    public const C_PAISA_PAY_ESCROWEMI = 'PaisaPayEscrowEMI';
    public const C_PAY_PAL = 'PayPal';
    public const C_PAY_PAL_OR_PAISA_PAY = 'PayPalOrPaisaPay';
}
