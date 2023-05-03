<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeStatusCodeType
{
    public const C_CLAIM_APPROVED = 'ClaimApproved';
    public const C_CLAIM_CLOSED = 'ClaimClosed';
    public const C_CLAIM_DENIED = 'ClaimDenied';
    public const C_CLAIM_IN_PROCESS = 'ClaimInProcess';
    public const C_CLAIM_OPENED = 'ClaimOpened';
    public const C_CLAIM_PAID = 'ClaimPaid';
    public const C_CLAIM_RESOLVED = 'ClaimResolved';
    public const C_CLAIM_SUBMITTED = 'ClaimSubmitted';
    public const C_CLOSED = 'Closed';
    public const C_CLOSEDFVF_CREDIT_NO_STRIKE = 'ClosedFVFCreditNoStrike';
    public const C_CLOSEDFVF_CREDIT_STRIKE = 'ClosedFVFCreditStrike';
    public const C_CLOSED_NOFVF_CREDIT_NO_STRIKE = 'ClosedNoFVFCreditNoStrike';
    public const C_CLOSED_NOFVF_CREDIT_STRIKE = 'ClosedNoFVFCreditStrike';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_FVF_CREDIT_REVERSED_AFTER_CLOSING = 'FVFCreditReversedAfterClosing';
    public const C_NO_DOCUMENTATION = 'NoDocumentation';
    public const C_STRIKE_APPEALED_AFTER_CLOSING = 'StrikeAppealedAfterClosing';
    public const C_STRIKE_APPEALED_ANDFVF_CREDIT_REVERSED = 'StrikeAppealedAndFVFCreditReversed';
    public const C_UNPAID_ITEM_OPENED = 'UnpaidItemOpened';
    public const C_WAITING_FOR_BUYER_RESPONSE = 'WaitingForBuyerResponse';
    public const C_WAITING_FOR_SELLER_RESPONSE = 'WaitingForSellerResponse';
}
