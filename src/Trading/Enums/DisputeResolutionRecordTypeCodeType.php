<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeResolutionRecordTypeCodeType
{
    public const C_APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_FEATURE_FEE_CREDIT = 'FeatureFeeCredit';
    public const C_FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';
    public const C_FVF_CREDIT = 'FVFCredit';
    public const C_FVF_CREDIT_NOT_GRANTED = 'FVFCreditNotGranted';
    public const C_FVF_ON_SHIPPING_CREDIT = 'FVFOnShippingCredit';
    public const C_FVF_ON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';
    public const C_GENERATECS_TICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';
    public const C_INSERTION_FEE_CREDIT = 'InsertionFeeCredit';
    public const C_ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';
    public const C_RESTRICT_BUYER = 'RestrictBuyer';
    public const C_REVERSEFVF_CREDIT = 'ReverseFVFCredit';
    public const C_REVERSEFVF_ON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';
    public const C_REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';
    public const C_REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';
    public const C_STRIKE_BUYER = 'StrikeBuyer';
    public const C_SUSPEND_BUYER = 'SuspendBuyer';
    public const C_UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';
    public const C_UNPAID_ITEM_REVISED = 'UnpaidItemRevised';
    public const C_UNRESTRICT_BUYER = 'UnrestrictBuyer';
    public const C_UNSUSPEND_BUYER = 'UnsuspendBuyer';
}
