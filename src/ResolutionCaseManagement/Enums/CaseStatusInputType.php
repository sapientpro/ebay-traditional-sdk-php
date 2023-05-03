<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class CaseStatusInputType
{
    public const C_CLOSED = 'CLOSED';
    public const C_ELIGIBLE_FOR_CREDIT = 'ELIGIBLE_FOR_CREDIT';
    public const C_MY_PAYMENT_DUE = 'MY_PAYMENT_DUE';
    public const C_MY_RESPONSE_DUE = 'MY_RESPONSE_DUE';
    public const C_OPEN = 'OPEN';
    public const C_OTHER_PARTY_RESPONSE_DUE = 'OTHER_PARTY_RESPONSE_DUE';
}
