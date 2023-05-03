<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class DecisionEnum
{
    public const C_ACCEPT_PARTIAL_REFUND = 'ACCEPT_PARTIAL_REFUND';
    public const C_APPROVE = 'APPROVE';
    public const C_APPROVE_WITHOUT_EBAY_LABEL = 'APPROVE_WITHOUT_EBAY_LABEL';
    public const C_DECLINE = 'DECLINE';
    public const C_DECLINE_PARTIAL_REFUND = 'DECLINE_PARTIAL_REFUND';
    public const C_OFFER_PARTIAL_REFUND = 'OFFER_PARTIAL_REFUND';
    public const C_OFFER_RETURN = 'OFFER_RETURN';
    public const C_OFFER_RETURN_WITHOUT_LABEL = 'OFFER_RETURN_WITHOUT_LABEL';
    public const C_PROVIDE_RMA = 'PROVIDE_RMA';
    public const C_UNKNOWN = 'UNKNOWN';
}
