<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class CaseDecisionType
{
    public const C_BUYER_FAULT = 'BUYER_FAULT';
    public const C_BUYER_FAULT_SELLER_FAULT = 'BUYER_FAULT_SELLER_FAULT';
    public const C_NEITHER_SELLER_NOR_BUYER_FAULT = 'NEITHER_SELLER_NOR_BUYER_FAULT';
    public const C_OTHER = 'OTHER';
    public const C_SELLER_FAULT = 'SELLER_FAULT';
}
