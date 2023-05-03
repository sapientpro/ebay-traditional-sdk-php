<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property BestOfferArrayType $BestOfferArray
 * @property ItemType $Item
 * @property ItemBestOffersArrayType $ItemBestOffersArray
 * @property int $PageNumber
 * @property PaginationResultType $PaginationResult
 */
class GetBestOffersResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BestOfferArray'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferArray',
            ],
            'Item'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Item',
            ],
            'ItemBestOffersArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemBestOffersArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemBestOffersArray',
            ],
            'PageNumber'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'PaginationResult'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
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
