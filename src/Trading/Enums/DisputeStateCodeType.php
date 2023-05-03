<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeStateCodeType
{
    public const C_BUYER_FIRST_RESPONSE_NO_PAY_OPTION = 'BuyerFirstResponseNoPayOption';
    public const C_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
    public const C_BUYER_FIRST_RESPONSE_PAY_OPTION = 'BuyerFirstResponsePayOption';
    public const C_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponsePayOptionLateResponse';
    public const C_CLAIM_CLOSED = 'ClaimClosed';
    public const C_CLAIM_DENIED = 'ClaimDenied';
    public const C_CLAIM_OPENED = 'ClaimOpened';
    public const C_CLAIM_PAID = 'ClaimPaid';
    public const C_CLAIM_PAYMENT_PENDING = 'ClaimPaymentPending';
    public const C_CLAIM_PENDING = 'ClaimPending';
    public const C_CLAIM_RESOLVED = 'ClaimResolved';
    public const C_CLAIM_SUBMITTED = 'ClaimSubmitted';
    public const C_CLOSED = 'Closed';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_LOCKED = 'Locked';
    public const C_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM = 'MutualAgreementOrBuyerReturningItem';
    public const C_MUTUAL_COMMUNICATION_NO_PAY_OPTION = 'MutualCommunicationNoPayOption';
    public const C_MUTUAL_COMMUNICATION_PAY_OPTION = 'MutualCommunicationPayOption';
    public const C_MUTUAL_WITHDRAWAL_AGREEMENT = 'MutualWithdrawalAgreement';
    public const C_MUTUAL_WITHDRAWAL_AGREEMENT_LATE = 'MutualWithdrawalAgreementLate';
    public const C_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION = 'NotAsDescribedMutualCommunication';
    public const C_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE = 'NotAsDescribedNoSellerResponse';
    public const C_NOT_RECEIVED_MUTUAL_COMMUNICATION = 'NotReceivedMutualCommunication';
    public const C_NOT_RECEIVED_NO_SELLER_RESPONSE = 'NotReceivedNoSellerResponse';
    public const C_NO_DOCUMENTATION = 'NoDocumentation';
    public const C_PENDING_RESOLVE = 'PendingResolve';
    public const C_UNPAID_ITEM_OPEN = 'UnpaidItemOpen';
    public const C_UPI_ASSISTANCE_DISABLED_BYE_BAY = 'UPIAssistanceDisabledByeBay';
    public const C_UPI_ASSISTANCE_DISABLED_BY_SELLER = 'UPIAssistanceDisabledBySeller';
}
