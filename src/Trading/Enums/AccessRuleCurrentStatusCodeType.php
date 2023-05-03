<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class AccessRuleCurrentStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DAILY_LIMIT_EXCEEDED = 'DailyLimitExceeded';
    public const C_DAILY_SOFT_LIMIT_EXCEEDED = 'DailySoftLimitExceeded';
    public const C_HOURLY_LIMIT_EXCEEDED = 'HourlyLimitExceeded';
    public const C_HOURLY_SOFT_LIMIT_EXCEEDED = 'HourlySoftLimitExceeded';
    public const C_NOT_SET = 'NotSet';
    public const C_PERIODIC_LIMIT_EXCEEDED = 'PeriodicLimitExceeded';
    public const C_PERIODIC_SOFT_LIMIT_EXCEEDED = 'PeriodicSoftLimitExceeded';
}
