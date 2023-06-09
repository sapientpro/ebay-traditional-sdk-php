<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Enums;

class AppealStatusEnum
{
    public const C_BUYER_APPEALED = 'BUYER_APPEALED';
    public const C_BUYER_SELLER_APPEALED = 'BUYER_SELLER_APPEALED';
    public const C_OTHER = 'OTHER';
    public const C_SELLER_APPEALED = 'SELLER_APPEALED';
    public const C_SELLER_INVOICED_BUYER_APPEALED = 'SELLER_INVOICED_BUYER_APPEALED';
    public const C_SELLER_RECOUPED_BUYER_APPEALED = 'SELLER_RECOUPED_BUYER_APPEALED';
    public const C_SELLER_RECOUPED_BUYER_APPEALED_CLOSED_CASE = 'SELLER_RECOUPED_BUYER_APPEALED_CLOSED_CASE';
    public const C_SELLER_RECOUP_APPEALED = 'SELLER_RECOUP_APPEALED';
    public const C_SELLER_RECOUP_NEEDED_BUYER_APPEALED = 'SELLER_RECOUP_NEEDED_BUYER_APPEALED';
    public const C_SELLER_RECOUP_NEEDED_BUYER_APPEALED_CLOSED_CASE = 'SELLER_RECOUP_NEEDED_BUYER_APPEALED_CLOSED_CASE';
}
