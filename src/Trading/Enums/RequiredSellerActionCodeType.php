<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class RequiredSellerActionCodeType
{
    public const C_CONTACTE_BAYCS = 'ContacteBayCS';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_MARK_AS_SHIPPED = 'MarkAsShipped';
    public const C_NONE = 'None';
    public const C_RESOLVEEBP_CASE = 'ResolveeBPCase';
    public const C_RESOLVEPPP_ICASE = 'ResolvePPPIcase';
    public const C_RESOLVE_BUYER_MESSAGE_INR = 'ResolveBuyerMessageInr';
    public const C_RESOLVE_BUYER_MESSAGE_SNAD = 'ResolveBuyerMessageSnad';
    public const C_RESOLVE_RETURN = 'ResolveReturn';
    public const C_SETUP_PAYOUT_METHOD = 'SetupPayoutMethod';
    public const C_UPDATE_PAYOUT_METHOD = 'UpdatePayoutMethod';
    public const C_UPLOAD_TRACKING_INFO = 'UploadTrackingInfo';
}
