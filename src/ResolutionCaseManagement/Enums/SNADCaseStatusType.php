<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class SNADCaseStatusType
{
    public const C_CLOSED = 'CLOSED';
    public const C_CS_CLOSED = 'CS_CLOSED';
    public const C_EXPIRED = 'EXPIRED';
    public const C_MY_PAYMENT_DUE = 'MY_PAYMENT_DUE';
    public const C_MY_RESPONSE_DUE = 'MY_RESPONSE_DUE';
    public const C_OTHER = 'OTHER';
    public const C_OTHER_PARTY_CONTACTED_CS_AWAITING_RESPONSE = 'OTHER_PARTY_CONTACTED_CS_AWAITING_RESPONSE';
    public const C_OTHER_PARTY_RESPONSE_DUE = 'OTHER_PARTY_RESPONSE_DUE';
    public const C_PAID = 'PAID';
    public const C_WAITING_DELIVERY = 'WAITING_DELIVERY';
    public const C_YOU_CONTACTED_CS_ABOUT_CLOSED_CASE = 'YOU_CONTACTED_CS_ABOUT_CLOSED_CASE';
    public const C_YOU_CONTACTED_CS_AWAITING_RESPONSE = 'YOU_CONTACTED_CS_AWAITING_RESPONSE';
}
