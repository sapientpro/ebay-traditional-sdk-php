<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class ActivityOptionEnum
{
    public const C_BUYER_ACCEPTS_NON_PAYPAL_PARTIAL_REFUND = 'BUYER_ACCEPTS_NON_PAYPAL_PARTIAL_REFUND';
    public const C_BUYER_ACCEPTS_PARTIAL_REFUND = 'BUYER_ACCEPTS_PARTIAL_REFUND';
    public const C_BUYER_CLOSE_RETURN = 'BUYER_CLOSE_RETURN';
    public const C_BUYER_CREATE_RETURN = 'BUYER_CREATE_RETURN';
    public const C_BUYER_DECLINE_PARTIAL_REFUND = 'BUYER_DECLINE_PARTIAL_REFUND';
    public const C_BUYER_ESCALATE = 'BUYER_ESCALATE';
    public const C_BUYER_MARK_AS_RECEIVED = 'BUYER_MARK_AS_RECEIVED';
    public const C_BUYER_MARK_REFUND_RECEIVED = 'BUYER_MARK_REFUND_RECEIVED';
    public const C_BUYER_MARK_RETURN_SHIPPED = 'BUYER_MARK_RETURN_SHIPPED';
    public const C_BUYER_PRINT_SHIPPING_LABEL = 'BUYER_PRINT_SHIPPING_LABEL';
    public const C_BUYER_PROVIDE_LABEL = 'BUYER_PROVIDE_LABEL';
    public const C_BUYER_PROVIDE_TRACKING_INFO = 'BUYER_PROVIDE_TRACKING_INFO';
    public const C_BUYER_SEND_MESSAGE = 'BUYER_SEND_MESSAGE';
    public const C_BUYER_VOID_LABEL = 'BUYER_VOID_LABEL';
    public const C_DELETE_FILE = 'DELETE_FILE';
    public const C_DISPOSITION_RULE_AUTO_REFUND = 'DISPOSITION_RULE_AUTO_REFUND';
    public const C_DISPOSITION_RULE_AUTO_ROUTE = 'DISPOSITION_RULE_AUTO_ROUTE';
    public const C_DISPOSITION_RULE_REPLACE_SEND_NO_SHIP = 'DISPOSITION_RULE_REPLACE_SEND_NO_SHIP';
    public const C_EMAIL_SHIPPING_LABEL = 'EMAIL_SHIPPING_LABEL';
    public const C_GENERAL_TIME_OUT = 'GENERAL_TIME_OUT';
    public const C_NOTIFIED_DELIVERED = 'NOTIFIED_DELIVERED';
    public const C_NOTIFIED_SHIPPED = 'NOTIFIED_SHIPPED';
    public const C_NOTIFY_REPLACEMENT_DELIVERED = 'NOTIFY_REPLACEMENT_DELIVERED';
    public const C_NOTIFY_REPLACEMENT_SHIPPED = 'NOTIFY_REPLACEMENT_SHIPPED';
    public const C_NOTIFY_UPDATE_REFUND_STATUS = 'NOTIFY_UPDATE_REFUND_STATUS';
    public const C_OTHER = 'OTHER';
    public const C_REMINDER_BUYER_TO_SHIP = 'REMINDER_BUYER_TO_SHIP';
    public const C_REMINDER_FOR_REFUND = 'REMINDER_FOR_REFUND';
    public const C_REMINDER_FOR_REFUND_NO_SHIPPING = 'REMINDER_FOR_REFUND_NO_SHIPPING';
    public const C_REMINDER_FOR_RMA = 'REMINDER_FOR_RMA';
    public const C_REMINDER_FOR_SHIPPING = 'REMINDER_FOR_SHIPPING';
    public const C_SELLER_APPROVE_REQUEST = 'SELLER_APPROVE_REQUEST';
    public const C_SELLER_DECLINE_REQUEST = 'SELLER_DECLINE_REQUEST';
    public const C_SELLER_ESCALATE = 'SELLER_ESCALATE';
    public const C_SELLER_ISSUE_REFUND = 'SELLER_ISSUE_REFUND';
    public const C_SELLER_ISSUE_STORE_CREDIT_REFUND = 'SELLER_ISSUE_STORE_CREDIT_REFUND';
    public const C_SELLER_MARK_AS_RECEIVED = 'SELLER_MARK_AS_RECEIVED';
    public const C_SELLER_MARK_REFUND_SENT = 'SELLER_MARK_REFUND_SENT';
    public const C_SELLER_MARK_REPLACEMENT_SHIPPED = 'SELLER_MARK_REPLACEMENT_SHIPPED';
    public const C_SELLER_OFFER_PARTIAL_REFUND = 'SELLER_OFFER_PARTIAL_REFUND';
    public const C_SELLER_OFFER_RETURNS = 'SELLER_OFFER_RETURNS';
    public const C_SELLER_PRINT_SHIPPING_LABEL = 'SELLER_PRINT_SHIPPING_LABEL';
    public const C_SELLER_PROVIDE_LABEL = 'SELLER_PROVIDE_LABEL';
    public const C_SELLER_PROVIDE_RMA = 'SELLER_PROVIDE_RMA';
    public const C_SELLER_PROVIDE_TRACKING_INFO = 'SELLER_PROVIDE_TRACKING_INFO';
    public const C_SELLER_SEND_MESSAGE = 'SELLER_SEND_MESSAGE';
    public const C_SELLER_VOID_LABEL = 'SELLER_VOID_LABEL';
    public const C_SUBMIT_FILE = 'SUBMIT_FILE';
    public const C_SYSTEM_CREATE_RETURN = 'SYSTEM_CREATE_RETURN';
    public const C_TIME_OUT_AFTER_DECLINE = 'TIME_OUT_AFTER_DECLINE';
    public const C_TIME_OUT_AFTER_REFUNDED = 'TIME_OUT_AFTER_REFUNDED';
    public const C_TIME_OUT_AFTER_REPLACED = 'TIME_OUT_AFTER_REPLACED';
    public const C_TIME_OUT_FOR_AUTHORIZE = 'TIME_OUT_FOR_AUTHORIZE';
    public const C_TIME_OUT_FOR_AUTO_REFUND = 'TIME_OUT_FOR_AUTO_REFUND';
    public const C_TIME_OUT_FOR_BUYER_RECOUP = 'TIME_OUT_FOR_BUYER_RECOUP';
    public const C_TIME_OUT_FOR_DELIVERY = 'TIME_OUT_FOR_DELIVERY';
    public const C_TIME_OUT_FOR_ESCALATION = 'TIME_OUT_FOR_ESCALATION';
    public const C_TIME_OUT_FOR_ESCALATION_AFTER_SMIR = 'TIME_OUT_FOR_ESCALATION_AFTER_SMIR';
    public const C_TIME_OUT_FOR_ITEM_REPLACED = 'TIME_OUT_FOR_ITEM_REPLACED';
    public const C_TIME_OUT_FOR_MARK_REFUND_RECEIVED = 'TIME_OUT_FOR_MARK_REFUND_RECEIVED';
    public const C_TIME_OUT_FOR_MARK_REFUND_SENT = 'TIME_OUT_FOR_MARK_REFUND_SENT';
    public const C_TIME_OUT_FOR_MASS_PAYOUT = 'TIME_OUT_FOR_MASS_PAYOUT';
    public const C_TIME_OUT_FOR_PAYOUT = 'TIME_OUT_FOR_PAYOUT';
    public const C_TIME_OUT_FOR_PROVIDE_LABEL = 'TIME_OUT_FOR_PROVIDE_LABEL';
    public const C_TIME_OUT_FOR_REFUND = 'TIME_OUT_FOR_REFUND';
    public const C_TIME_OUT_FOR_REPLACEMENT_DELIVERED_ITEM_NOT_RETURNED = 'TIME_OUT_FOR_REPLACEMENT_DELIVERED_ITEM_NOT_RETURNED';
    public const C_TIME_OUT_FOR_REPLACEMENT_SHIPPED = 'TIME_OUT_FOR_REPLACEMENT_SHIPPED';
    public const C_TIME_OUT_FOR_RETURN_SHIPPING = 'TIME_OUT_FOR_RETURN_SHIPPING';
    public const C_TIME_OUT_FOR_RMA = 'TIME_OUT_FOR_RMA';
    public const C_TIME_OUT_FOR_SELLER_INVOICE = 'TIME_OUT_FOR_SELLER_INVOICE';
    public const C_TIME_OUT_FOR_SELLER_PAYOUT = 'TIME_OUT_FOR_SELLER_PAYOUT';
    public const C_TIME_OUT_FOR_SHIPMENT_TRACKING = 'TIME_OUT_FOR_SHIPMENT_TRACKING';
    public const C_TIME_OUT_FOR_SHIPPING = 'TIME_OUT_FOR_SHIPPING';
}