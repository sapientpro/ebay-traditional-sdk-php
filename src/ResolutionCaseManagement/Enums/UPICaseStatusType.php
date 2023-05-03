<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class UPICaseStatusType
{
    public const C_CLOSED = 'CLOSED';
    public const C_CLOSED_FVFCREDIT_NOSTRIKE = 'CLOSED_FVFCREDIT_NOSTRIKE';
    public const C_CLOSED_FVFCREDIT_STRIKE = 'CLOSED_FVFCREDIT_STRIKE';
    public const C_CLOSED_NOFVFCREDIT_NOSTRIKE = 'CLOSED_NOFVFCREDIT_NOSTRIKE';
    public const C_CLOSED_NOFVFCREDIT_STRIKE = 'CLOSED_NOFVFCREDIT_STRIKE';
    public const C_CS_CLOSED = 'CS_CLOSED';
    public const C_EXPIRED = 'EXPIRED';
    public const C_MY_PAYMENT_DUE = 'MY_PAYMENT_DUE';
    public const C_MY_RESPONSE_DUE = 'MY_RESPONSE_DUE';
    public const C_OTHER = 'OTHER';
    public const C_OTHER_PARTY_RESPONSE_DUE = 'OTHER_PARTY_RESPONSE_DUE';
}
