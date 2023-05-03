<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class InquiryStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INVALID = 'Invalid';
    public const C_NOT_APPLICABLE = 'NotApplicable';
    public const C_TRACK_INQUIRY_CLOSED_NO_REFUND = 'TrackInquiryClosedNoRefund';
    public const C_TRACK_INQUIRY_CLOSED_WITH_REFUND = 'TrackInquiryClosedWithRefund';
    public const C_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND = 'TrackInquiryEscalatedClosedNoRefund';
    public const C_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND = 'TrackInquiryEscalatedClosedWithRefund';
    public const C_TRACK_INQUIRY_ESCALATED_PENDINGCS = 'TrackInquiryEscalatedPendingCS';
    public const C_TRACK_INQUIRY_ESCALATED_PENDING_BUYER = 'TrackInquiryEscalatedPendingBuyer';
    public const C_TRACK_INQUIRY_ESCALATED_PENDING_SELLER = 'TrackInquiryEscalatedPendingSeller';
    public const C_TRACK_INQUIRY_PENDING_BUYER_RESPONSE = 'TrackInquiryPendingBuyerResponse';
    public const C_TRACK_INQUIRY_PENDING_SELLER_RESPONSE = 'TrackInquiryPendingSellerResponse';
}
