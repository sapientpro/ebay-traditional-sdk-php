<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class EligibilityCheckTypeEnum
{
    public const C_ITEM_SELECTION = 'ITEM_SELECTION';
    public const C_PRE_TRANSACTION = 'PRE_TRANSACTION';
    public const C_REPLACEMENT_CREATION = 'REPLACEMENT_CREATION';
    public const C_REPLACEMENT_ITEM_SELECTION = 'REPLACEMENT_ITEM_SELECTION';
    public const C_RETURN_CREATION = 'RETURN_CREATION';
}
