<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class SMSSubscriptionErrorCodeCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_PHONE_NUMBER_CARRIER_CHANGED = 'PhoneNumberCarrierChanged';
    public const C_PHONE_NUMBER_CHANGED = 'PhoneNumberChanged';
    public const C_PHONE_NUMBER_INVALID = 'PhoneNumberInvalid';
    public const C_SMS_AGGREGATOR_NOT_AVAILABLE = 'SMSAggregatorNotAvailable';
    public const C_USER_REQUESTED_UNREGISTRATION = 'UserRequestedUnregistration';
}
