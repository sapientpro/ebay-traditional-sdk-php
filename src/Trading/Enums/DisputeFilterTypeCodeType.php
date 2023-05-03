<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeFilterTypeCodeType
{
    public const C_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';
    public const C_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';
    public const C_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';
    public const C_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';
    public const C_ITEM_NOT_RECEIVED_DISPUTES = 'ItemNotReceivedDisputes';
    public const C_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';
}
