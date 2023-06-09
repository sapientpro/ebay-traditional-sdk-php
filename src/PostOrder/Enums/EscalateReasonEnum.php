<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class EscalateReasonEnum
{
    public const C_BUYER_NORESPONSE = 'BUYER_NORESPONSE';
    public const C_BUYER_RETURNED_WRONG_ITEM = 'BUYER_RETURNED_WRONG_ITEM';
    public const C_DISAGREE_WITH_RETURN_REASON = 'DISAGREE_WITH_RETURN_REASON';
    public const C_ITEM_NOT_RECEIVED = 'ITEM_NOT_RECEIVED';
    public const C_ITEM_RECEIVED_IN_DIFFERENT_CONDITION = 'ITEM_RECEIVED_IN_DIFFERENT_CONDITION';
    public const C_NO_REFUND_FOR_RETURN_SHIPPING = 'NO_REFUND_FOR_RETURN_SHIPPING';
    public const C_NO_REFUND_RECEIVED = 'NO_REFUND_RECEIVED';
    public const C_OTHER = 'OTHER';
    public const C_SELLER_NO_RESPONSE = 'SELLER_NO_RESPONSE';
    public const C_TROUBLE_COMMUNICATION_WITH_BUYER = 'TROUBLE_COMMUNICATION_WITH_BUYER';
    public const C_TROUBLE_COMMUNICATION_WITH_SELLER = 'TROUBLE_COMMUNICATION_WITH_SELLER';
}
