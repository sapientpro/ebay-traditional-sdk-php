<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class BuyerPaymentInstrumentCodeType
{
    public const C_BANK_DIRECT_DEBIT = 'BankDirectDebit';
    public const C_BML = 'BML';
    public const C_CREDIT_CARD = 'CreditCard';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_ELV = 'ELV';
    public const C_GIROPAY = 'GIROPAY';
    public const C_LOCAL_PAYMENTAMEX = 'LocalPaymentAMEX';
    public const C_LOCAL_PAYMENTELV = 'LocalPaymentELV';
    public const C_LOCAL_PAYMENTJCB = 'LocalPaymentJCB';
    public const C_LOCAL_PAYMENTSOLO = 'LocalPaymentSOLO';
    public const C_LOCAL_PAYMENTSWITCH = 'LocalPaymentSWITCH';
    public const C_LOCAL_PAYMENTVISA = 'LocalPaymentVISA';
    public const C_LOCAL_PAYMENT_CREDIT_CARD_OTHER = 'LocalPaymentCreditCardOther';
    public const C_LOCAL_PAYMENT_DINERSCLUB = 'LocalPaymentDinersclub';
    public const C_LOCAL_PAYMENT_DISCOVER = 'LocalPaymentDiscover';
    public const C_LOCAL_PAYMENT_MASTER_CARD = 'LocalPaymentMasterCard';
    public const C_NONE = 'None';
    public const C_PAY_PAL = 'PayPal';
    public const C_PAY_UPON_INVOICE = 'PayUponInvoice';
}
