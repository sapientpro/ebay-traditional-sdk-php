<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class ItemArrivedWithinEDDCodeType
{
    public const C_BUYER_DIDNT_PROVIDE_ANSWER = 'BuyerDidntProvideAnswer';
    public const C_BUYER_INDICATED_ITEM_ARRIVED_WITHINEDD_RANGE = 'BuyerIndicatedItemArrivedWithinEDDRange';
    public const C_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHINEDD_RANGE = 'BuyerIndicatedItemNotArrivedWithinEDDRange';
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_EDD_QUESTION_WAS_NOT_ASKED = 'EddQuestionWasNotAsked';
}
