<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class BuyerProtectionCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ITEM_ELIGIBLE = 'ItemEligible';
    public const C_ITEM_INELIGIBLE = 'ItemIneligible';
    public const C_ITEM_MARKED_ELIGIBLE = 'ItemMarkedEligible';
    public const C_ITEM_MARKED_INELIGIBLE = 'ItemMarkedIneligible';
    public const C_NO_COVERAGE = 'NoCoverage';
}
