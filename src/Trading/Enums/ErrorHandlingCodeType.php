<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class ErrorHandlingCodeType
{
    public const C_ALL_OR_NOTHING = 'AllOrNothing';
    public const C_BEST_EFFORT = 'BestEffort';
    public const C_FAIL_ON_ERROR = 'FailOnError';
    public const C_LEGACY = 'Legacy';
}
