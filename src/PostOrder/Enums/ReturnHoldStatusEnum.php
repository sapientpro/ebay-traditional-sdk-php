<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class ReturnHoldStatusEnum
{
    public const C_HOLD_CREATION_SUCCESS = 'HOLD_CREATION_SUCCESS';
    public const C_HOLD_RELEASE_FAILED = 'HOLD_RELEASE_FAILED';
    public const C_HOLD_RELEASE_SUCCESS = 'HOLD_RELEASE_SUCCESS';
    public const C_INELIGIBLE_TO_RELEASE_HOLD = 'INELIGIBLE_TO_RELEASE_HOLD';
    public const C_OTHER = 'OTHER';
}
