<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\DiscountReasonCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $SKU
 * @property DateTime $StartTime
 * @property DateTime $EndTime
 * @property FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property DiscountReasonCodeType[] $DiscountReason
 * @property ProductSuggestionsType $ProductSuggestions
 * @property ListingRecommendationsType $ListingRecommendations
 */
class AddFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'SKU'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'StartTime'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'EndTime'                => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'Fees'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FeesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Fees',
            ],
            'CategoryID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'Category2ID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Category2ID',
            ],
            'DiscountReason'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DiscountReason',
            ],
            'ProductSuggestions'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ProductSuggestionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductSuggestions',
            ],
            'ListingRecommendations' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ListingRecommendationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingRecommendations',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'AddFixedPriceItemResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
