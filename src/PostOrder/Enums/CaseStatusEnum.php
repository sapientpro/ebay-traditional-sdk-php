<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CaseStatusEnum
{
    public const C_CLOSED = 'CLOSED';
    public const C_CS_CLOSED = 'CS_CLOSED';
    public const C_ON_HOLD = 'ON_HOLD';
    public const C_OPEN = 'OPEN';
    public const C_OTHER = 'OTHER';
    public const C_REFUND_AGREED_BUT_FAILED = 'REFUND_AGREED_BUT_FAILED';
    public const C_WAITING_CS = 'WAITING_CS';
    public const C_WAITING_DELIVERY = 'WAITING_DELIVERY';
}
