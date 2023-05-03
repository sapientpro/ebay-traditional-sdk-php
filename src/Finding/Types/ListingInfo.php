<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $bestOfferEnabled
 * @property bool $buyItNowAvailable
 * @property Amount $buyItNowPrice
 * @property Amount $convertedBuyItNowPrice
 * @property DateTime $startTime
 * @property DateTime $endTime
 * @property string $listingType
 * @property bool $gift
 */
class ListingInfo extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'bestOfferEnabled'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bestOfferEnabled',
            ],
            'buyItNowAvailable'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyItNowAvailable',
            ],
            'buyItNowPrice'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyItNowPrice',
            ],
            'convertedBuyItNowPrice' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'convertedBuyItNowPrice',
            ],
            'startTime'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'startTime',
            ],
            'endTime'                => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endTime',
            ],
            'listingType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingType',
            ],
            'gift'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'gift',
            ],
        ];

    /**
     * @param  array  $values  optional properties and values to assign to the object
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
