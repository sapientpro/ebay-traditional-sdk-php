<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class UnpaidItemStatusTypeCodeType
{
    public const C_AWAITING_BUYER_RESPONSE = 'AwaitingBuyerResponse';
    public const C_AWAITING_SELLER_RESPONSE = 'AwaitingSellerResponse';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_FINAL_VALUE_FEE_CREDITED = 'FinalValueFeeCredited';
    public const C_FINAL_VALUE_FEE_DENIED = 'FinalValueFeeDenied';
    public const C_FINAL_VALUE_FEE_ELIGIBLE = 'FinalValueFeeEligible';
    public const C_UNPAID_ITEM_ELIGIBLE = 'UnpaidItemEligible';
    public const C_UNPAID_ITEM_FILED = 'UnpaidItemFiled';
}
