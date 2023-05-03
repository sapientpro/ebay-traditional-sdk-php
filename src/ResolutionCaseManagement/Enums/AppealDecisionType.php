<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class AppealDecisionType
{
    public const C_BUYER_DENIED = 'BUYER_DENIED';
    public const C_BUYER_WINS = 'BUYER_WINS';
    public const C_BUYER_WINS_PARTIAL_CREDIT = 'BUYER_WINS_PARTIAL_CREDIT';
    public const C_OTHER = 'OTHER';
    public const C_SELLER_DENIED = 'SELLER_DENIED';
    public const C_SELLER_WINS = 'SELLER_WINS';
    public const C_SELLER_WINS_PARTIAL_CREDIT = 'SELLER_WINS_PARTIAL_CREDIT';
}
