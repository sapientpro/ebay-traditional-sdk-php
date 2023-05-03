<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CountryCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemConditionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentMethodSearchCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PreferredLocationCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\QuantityOperatorCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SearchFlagCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellerBusinessCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SimpleItemSortCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SortOrderCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $SearchName
 * @property string $SearchQuery
 * @property string $QueryKeywords
 * @property string $CategoryID
 * @property SimpleItemSortCodeType $ItemSort
 * @property SortOrderCodeType $SortOrder
 * @property DateTime $EndTimeFrom
 * @property DateTime $EndTimeTo
 * @property int $MaxDistance
 * @property string $PostalCode
 * @property ItemTypeCodeType $ItemType
 * @property AmountType $PriceMax
 * @property AmountType $PriceMin
 * @property CurrencyCodeType $Currency
 * @property int $BidCountMax
 * @property int $BidCountMin
 * @property SearchFlagCodeType[] $SearchFlag
 * @property PaymentMethodSearchCodeType $PaymentMethod
 * @property PreferredLocationCodeType $PreferredLocation
 * @property string[] $SellerID
 * @property string[] $SellerIDExclude
 * @property CountryCodeType $ItemsAvailableTo
 * @property CountryCodeType $ItemsLocatedIn
 * @property SellerBusinessCodeType $SellerBusinessType
 * @property ItemConditionCodeType $Condition
 * @property int $Quantity
 * @property QuantityOperatorCodeType $QuantityOperator
 */
class MyeBayFavoriteSearchType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SearchName'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SearchName',
            ],
            'SearchQuery'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SearchQuery',
            ],
            'QueryKeywords'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QueryKeywords',
            ],
            'CategoryID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'ItemSort'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSort',
            ],
            'SortOrder'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SortOrder',
            ],
            'EndTimeFrom'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTimeFrom',
            ],
            'EndTimeTo'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTimeTo',
            ],
            'MaxDistance'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxDistance',
            ],
            'PostalCode'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PostalCode',
            ],
            'ItemType'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemType',
            ],
            'PriceMax'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PriceMax',
            ],
            'PriceMin'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PriceMin',
            ],
            'Currency'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Currency',
            ],
            'BidCountMax'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidCountMax',
            ],
            'BidCountMin'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidCountMin',
            ],
            'SearchFlag'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SearchFlag',
            ],
            'PaymentMethod'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
            ],
            'PreferredLocation'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PreferredLocation',
            ],
            'SellerID'           => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SellerID',
            ],
            'SellerIDExclude'    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SellerIDExclude',
            ],
            'ItemsAvailableTo'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemsAvailableTo',
            ],
            'ItemsLocatedIn'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemsLocatedIn',
            ],
            'SellerBusinessType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerBusinessType',
            ],
            'Condition'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Condition',
            ],
            'Quantity'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'QuantityOperator'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuantityOperator',
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
