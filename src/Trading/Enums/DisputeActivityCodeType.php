<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class DisputeActivityCodeType
{
    public const C_CAME_TO_AGREEMENT_NEEDFVF_CREDIT = 'CameToAgreementNeedFVFCredit';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';
    public const C_SELLER_ADD_INFORMATION = 'SellerAddInformation';
    public const C_SELLER_COMMENT = 'SellerComment';
    public const C_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';
    public const C_SELLER_END_COMMUNICATION = 'SellerEndCommunication';
    public const C_SELLER_OFFERS_REFUND = 'SellerOffersRefund';
    public const C_SELLER_PAYMENT_NOT_RECEIVED = 'SellerPaymentNotReceived';
    public const C_SELLER_SHIPPED_ITEM = 'SellerShippedItem';
}
