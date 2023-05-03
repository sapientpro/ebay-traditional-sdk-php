<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeReasonCodeType
{
    public const C_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    public const C_NO_REFUND = 'NoRefund';
    public const C_RETURN_POLICY_UNPAID_ITEM = 'ReturnPolicyUnpaidItem';
    public const C_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';
    public const C_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';
}
