<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class CancelTransactionCaseStatusType
{
    public const C_CANCELLED = 'CANCELLED';
    public const C_CLOSED = 'CLOSED';
    public const C_CLOSED_FVFCREDIT = 'CLOSED_FVFCREDIT';
    public const C_CLOSED_NOFVFCREDIT = 'CLOSED_NOFVFCREDIT';
    public const C_CS_CLOSED = 'CS_CLOSED';
    public const C_EXPIRED = 'EXPIRED';
    public const C_MY_RESPONSE_DUE = 'MY_RESPONSE_DUE';
    public const C_OTHER = 'OTHER';
    public const C_OTHER_PARTY_RESPONSE_DUE = 'OTHER_PARTY_RESPONSE_DUE';
}
