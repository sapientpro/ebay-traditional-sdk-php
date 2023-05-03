<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class InsuranceOptionCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    public const C_NOT_OFFERED = 'NotOffered';
    public const C_NOT_OFFERED_ON_SITE = 'NotOfferedOnSite';
    public const C_OPTIONAL = 'Optional';
    public const C_REQUIRED = 'Required';
}
