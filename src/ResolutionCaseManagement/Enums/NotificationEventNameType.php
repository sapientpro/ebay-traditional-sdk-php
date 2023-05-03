<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums;

class NotificationEventNameType
{
    public const C_EBP_APPEALED_CASE = 'EBPAppealedCase';
    public const C_EBP_CLOSED_APPEAL = 'EBPClosedAppeal';
    public const C_EBP_CLOSED_CASE = 'EBPClosedCase';
    public const C_EBP_ESCALATED_CASE = 'EBPEscalatedCase';
    public const C_EBP_MY_PAYMENT_DUE = 'EBPMyPaymentDue';
    public const C_EBP_MY_RESPONSE_DUE = 'EBPMyResponseDue';
    public const C_EBP_ON_HOLD_CASE = 'EBPOnHoldCase';
    public const C_EBP_OTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';
    public const C_EBP_PAYMENT_DONE = 'EBPPaymentDone';
}
