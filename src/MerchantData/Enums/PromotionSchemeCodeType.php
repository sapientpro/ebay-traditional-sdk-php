<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Enums;

class PromotionSchemeCodeType
{
    public const C_CATEGORY_PROXIMITY = 'CategoryProximity';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_DEFAULT_CROSS_SELL_LOGIC = 'DefaultCrossSellLogic';
    public const C_DEFAULT_RULE = 'DefaultRule';
    public const C_DEFAULT_UP_SELL_LOGIC = 'DefaultUpSellLogic';
    public const C_ITEM_TO_DEFAULT_RULE = 'ItemToDefaultRule';
    public const C_ITEM_TO_ITEM = 'ItemToItem';
    public const C_ITEM_TO_STORE_CAT = 'ItemToStoreCat';
    public const C_RELATED_CATEGORY_RULE = 'RelatedCategoryRule';
    public const C_STORE_TO_STORE_CAT = 'StoreToStoreCat';
}
