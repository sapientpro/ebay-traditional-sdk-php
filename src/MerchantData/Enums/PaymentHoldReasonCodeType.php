<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class PaymentHoldReasonCodeType
{
    public const C_BELOW_STANDARD_SELLER = 'BelowStandardSeller';
    public const C_CASUAL_SELLER = 'CasualSeller';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_EBP_CASE_OPEN = 'EbpCaseOpen';
    public const C_NEW_PAYPAL_ACCOUNT_ADDED = 'NewPaypalAccountAdded';
    public const C_NEW_SELLER = 'NewSeller';
    public const C_NONE = 'None';
    public const C_NOT_AVAILABLE = 'NotAvailable';
    public const C_OTHER = 'Other';
    public const C_REINSTATEMENT_AFTER_SUSPENSION = 'ReinstatementAfterSuspension';
    public const C_SELLER_IS_ON_BLACK_LIST = 'SellerIsOnBlackList';
}
