<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class SellingManagerAutoRelistTypeCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_RELIST_CONTINUOUSLY = 'RelistContinuously';
    public const C_RELIST_CONTINUOUSLY_UNTIL_SOLD = 'RelistContinuouslyUntilSold';
    public const C_RELIST_ONCE_IF_NOT_SOLD = 'RelistOnceIfNotSold';
}
