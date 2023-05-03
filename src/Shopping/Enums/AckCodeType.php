<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Enums;

class AckCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_FAILURE = 'Failure';
    public const C_PARTIAL_FAILURE = 'PartialFailure';
    public const C_SUCCESS = 'Success';
    public const C_WARNING = 'Warning';
}
