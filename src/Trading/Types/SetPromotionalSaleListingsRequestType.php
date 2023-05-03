<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ModifyActionCodeType;

use function array_key_exists;

/**
 * @property int $PromotionalSaleID
 * @property ModifyActionCodeType $Action
 * @property ItemIDArrayType $PromotionalSaleItemIDArray
 * @property int $StoreCategoryID
 * @property int $CategoryID
 * @property bool $AllFixedPriceItems
 * @property bool $AllAuctionItems
 */
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PromotionalSaleID'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleID',
            ],
            'Action'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Action',
            ],
            'PromotionalSaleItemIDArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleItemIDArray',
            ],
            'StoreCategoryID'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreCategoryID',
            ],
            'CategoryID'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'AllFixedPriceItems'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AllFixedPriceItems',
            ],
            'AllAuctionItems'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AllAuctionItems',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetPromotionalSaleListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
