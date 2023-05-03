<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class InquiryStatusEnum
{
    public const C_CLOSED = 'CLOSED';
    public const C_CLOSED_WITH_ESCALATION = 'CLOSED_WITH_ESCALATION';
    public const C_CS_CLOSED = 'CS_CLOSED';
    public const C_OPEN = 'OPEN';
    public const C_OTHER = 'OTHER';
    public const C_PENDING = 'PENDING';
    public const C_WAITING_BUYER_RESPONSE = 'WAITING_BUYER_RESPONSE';
    public const C_WAITING_SELLER_RESPONSE = 'WAITING_SELLER_RESPONSE';
}
