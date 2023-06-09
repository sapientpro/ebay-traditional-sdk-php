<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class CaseCloseReasonEnum
{
    public const C_AGENT_CLOSE_FOR_BUYER = 'AGENT_CLOSE_FOR_BUYER';
    public const C_AGENT_CLOSE_FOR_EBAY = 'AGENT_CLOSE_FOR_EBAY';
    public const C_AGENT_CLOSE_FOR_SELLER = 'AGENT_CLOSE_FOR_SELLER';
    public const C_AUTO_DISPOSE_BUYER_WIN_NO_SELLER_FAULT = 'AUTO_DISPOSE_BUYER_WIN_NO_SELLER_FAULT';
    public const C_AUTO_DISPOSE_SELLER_WIN_BUYER_FAULT = 'AUTO_DISPOSE_SELLER_WIN_BUYER_FAULT';
    public const C_BUYER_CLOSE = 'BUYER_CLOSE';
    public const C_BUYER_CONFIRM_FULL_REFUND_NPP = 'BUYER_CONFIRM_FULL_REFUND_NPP';
    public const C_BUYER_CONFIRM_FULL_REFUND_PP = 'BUYER_CONFIRM_FULL_REFUND_PP';
    public const C_BUYER_CONFIRM_PARTIAL_REFUND_NPP = 'BUYER_CONFIRM_PARTIAL_REFUND_NPP';
    public const C_BUYER_CONFIRM_PARTIAL_REFUND_PP = 'BUYER_CONFIRM_PARTIAL_REFUND_PP';
    public const C_BUYER_REFUNDED = 'BUYER_REFUNDED';
    public const C_BUYER_WINS_DESTROY_ITEM = 'BUYER_WINS_DESTROY_ITEM';
    public const C_BUYER_WINS_NO_ITEM_RETURNS = 'BUYER_WINS_NO_ITEM_RETURNS';
    public const C_BUYER_WINS_NO_SELLER_FAULT = 'BUYER_WINS_NO_SELLER_FAULT';
    public const C_BUYER_WINS_NO_SELLER_FAULT_FOR_FORCED_RETURN = 'BUYER_WINS_NO_SELLER_FAULT_FOR_FORCED_RETURN';
    public const C_BUYER_WINS_NO_SELLER_FAULT_PARTIAL_CREDIT = 'BUYER_WINS_NO_SELLER_FAULT_PARTIAL_CREDIT';
    public const C_BUYER_WINS_SELLER_FAULT = 'BUYER_WINS_SELLER_FAULT';
    public const C_BUYER_WINS_SELLER_FAULT_BUYER_RETURNS_ITEM = 'BUYER_WINS_SELLER_FAULT_BUYER_RETURNS_ITEM';
    public const C_BUYER_WINS_SELLER_FAULT_FOR_FORCED_RETURN = 'BUYER_WINS_SELLER_FAULT_FOR_FORCED_RETURN';
    public const C_BUYER_WINS_SELLER_FAULT_NO_CREDIT = 'BUYER_WINS_SELLER_FAULT_NO_CREDIT';
    public const C_CLOSED_CS_CLOSE = 'CLOSED_CS_CLOSE';
    public const C_ECHECK_TIMEOUT = 'ECHECK_TIMEOUT';
    public const C_ESCALATE_CS_AUTO_DISPOSE_BUYER_WINS_NO_SELLER_FAULT_NO_CREDIT = 'ESCALATE_CS_AUTO_DISPOSE_BUYER_WINS_NO_SELLER_FAULT_NO_CREDIT';
    public const C_ESCALATE_CS_AUTO_DISPOSE_BUYER_WIN_SELLER_FAULT = 'ESCALATE_CS_AUTO_DISPOSE_BUYER_WIN_SELLER_FAULT';
    public const C_ESCALATE_CS_AUTO_DISPOSE_BUYER_WIN_SELLER_FAULT_NO_RECOUP = 'ESCALATE_CS_AUTO_DISPOSE_BUYER_WIN_SELLER_FAULT_NO_RECOUP';
    public const C_ESCALATE_CS_AUTO_DISPOSE_SELLER_WIN_BUYER_FAULT = 'ESCALATE_CS_AUTO_DISPOSE_SELLER_WIN_BUYER_FAULT';
    public const C_EXPIRE_AFTER_ENTER_TRACKING_FOR_FORCED_RETURN = 'EXPIRE_AFTER_ENTER_TRACKING_FOR_FORCED_RETURN';
    public const C_EXPIRE_ENTER_TRACKING_AFTER_CS_DECISION = 'EXPIRE_ENTER_TRACKING_AFTER_CS_DECISION';
    public const C_ITEM_DELIVERED_FOR_FORCED_RETURN = 'ITEM_DELIVERED_FOR_FORCED_RETURN';
    public const C_NO_SELLER_FAULT_BUYER_DESTROYS_ITEM = 'NO_SELLER_FAULT_BUYER_DESTROYS_ITEM';
    public const C_NO_SELLER_FAULT_BUYER_RETURNS_ITEM = 'NO_SELLER_FAULT_BUYER_RETURNS_ITEM';
    public const C_OTHER = 'OTHER';
    public const C_PAYMENT_PROCESSOR_CLAIM_FILED = 'PAYMENT_PROCESSOR_CLAIM_FILED';
    public const C_RETURN_TRACKING_DELIVERED = 'RETURN_TRACKING_DELIVERED';
    public const C_SELLER_FULL_REFUND_PP = 'SELLER_FULL_REFUND_PP';
    public const C_SELLER_PARTIAL_REFUND_PP = 'SELLER_PARTIAL_REFUND_PP';
    public const C_SELLER_WINS_BUYER_FAULT = 'SELLER_WINS_BUYER_FAULT';
    public const C_SELLER_WINS_BUYER_FAULT_FOR_FORCED_RETURN = 'SELLER_WINS_BUYER_FAULT_FOR_FORCED_RETURN';
    public const C_UNDEFINED = 'UNDEFINED';
}
