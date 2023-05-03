<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BulkDataExchange\Types;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Enums\IncludeListingType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property IncludeListingType $includeListingType
 * @property FixedPriceItemDetails $fixedPriceItemDetails
 * @property AuctionItemDetails $auctionItemDetails
 */
class ActiveInventoryReportFilter extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'includeListingType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'includeListingType',
            ],
            'fixedPriceItemDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\FixedPriceItemDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fixedPriceItemDetails',
            ],
            'auctionItemDetails'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AuctionItemDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'auctionItemDetails',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
