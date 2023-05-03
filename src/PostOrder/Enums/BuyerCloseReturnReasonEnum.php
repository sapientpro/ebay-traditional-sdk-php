<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class BuyerCloseReturnReasonEnum
{
    public const C_BUYER_NO_LONGER_WANTS_RETURN = 'BUYER_NO_LONGER_WANTS_RETURN';
    public const C_BUYER_RECEIVED_REFUND = 'BUYER_RECEIVED_REFUND';
    public const C_BUYER_RECEIVED_REPLACEMENT = 'BUYER_RECEIVED_REPLACEMENT';
    public const C_BUYER_STARTED_RETURN_ACCIDENTALLY = 'BUYER_STARTED_RETURN_ACCIDENTALLY';
    public const C_OTHER = 'OTHER';
    public const C_UNKNOWN = 'UNKNOWN';
}
