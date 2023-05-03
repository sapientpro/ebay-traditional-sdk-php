<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $SummaryDays
 * @property int $TotalBids
 * @property int $BidActivityWithSeller
 * @property int $BidsToUniqueSellers
 * @property int $BidsToUniqueCategories
 * @property int $BidRetractions
 * @property ItemBidDetailsType[] $ItemBidDetails
 */
class BiddingSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SummaryDays'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SummaryDays',
            ],
            'TotalBids'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalBids',
            ],
            'BidActivityWithSeller'  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidActivityWithSeller',
            ],
            'BidsToUniqueSellers'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidsToUniqueSellers',
            ],
            'BidsToUniqueCategories' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidsToUniqueCategories',
            ],
            'BidRetractions'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidRetractions',
            ],
            'ItemBidDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ItemBidDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ItemBidDetails',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
