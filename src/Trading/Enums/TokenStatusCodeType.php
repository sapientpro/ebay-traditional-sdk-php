<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class TokenStatusCodeType
{
    public const C_ACTIVE = 'Active';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_EXPIRED = 'Expired';
    public const C_INVALID = 'Invalid';
    public const C_REVOKED_BYE_BAY = 'RevokedByeBay';
    public const C_REVOKED_BY_APP = 'RevokedByApp';
    public const C_REVOKED_BY_USER = 'RevokedByUser';
}
