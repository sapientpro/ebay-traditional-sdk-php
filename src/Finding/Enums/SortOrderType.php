<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Enums;

class SortOrderType
{
    public const C_BEST_MATCH = 'BestMatch';
    public const C_BID_COUNT_FEWEST = 'BidCountFewest';
    public const C_BID_COUNT_MOST = 'BidCountMost';
    public const C_COUNTRY_ASCENDING = 'CountryAscending';
    public const C_COUNTRY_DESCENDING = 'CountryDescending';
    public const C_CURRENT_PRICE_HIGHEST = 'CurrentPriceHighest';
    public const C_DISTANCE_NEAREST = 'DistanceNearest';
    public const C_END_TIME_SOONEST = 'EndTimeSoonest';
    public const C_PRICE_PLUS_SHIPPING_HIGHEST = 'PricePlusShippingHighest';
    public const C_PRICE_PLUS_SHIPPING_LOWEST = 'PricePlusShippingLowest';
    public const C_START_TIME_NEWEST = 'StartTimeNewest';
    public const C_WATCH_COUNT_DECREASE_SORT = 'WatchCountDecreaseSort';
}
