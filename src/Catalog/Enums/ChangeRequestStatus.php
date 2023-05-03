<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Enums;

class ChangeRequestStatus
{
    public const C_APPROVED = 'APPROVED';
    public const C_APPROVED_WITH_MODIFICATIONS = 'APPROVED_WITH_MODIFICATIONS';
    public const C_REJECTED = 'REJECTED';
    public const C_SUBMITTED = 'SUBMITTED';
    public const C_UNDER_EXTENDED_REVIEW = 'UNDER_EXTENDED_REVIEW';
    public const C_UNDER_REVIEW = 'UNDER_REVIEW';
}
