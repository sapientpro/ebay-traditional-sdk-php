<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class AccountHistorySelectionCodeType
{
    public const C_BETWEEN_SPECIFIED_DATES = 'BetweenSpecifiedDates';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_LAST_INVOICE = 'LastInvoice';
    public const C_SPECIFIED_INVOICE = 'SpecifiedInvoice';
}
