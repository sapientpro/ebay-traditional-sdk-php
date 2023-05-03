<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property ItemListCustomizationType $ScheduledList
 * @property ItemListCustomizationType $ActiveList
 * @property ItemListCustomizationType $SoldList
 * @property ItemListCustomizationType $UnsoldList
 * @property ItemListCustomizationType $DeletedFromSoldList
 * @property ItemListCustomizationType $DeletedFromUnsoldList
 * @property ItemListCustomizationType $SellingSummary
 * @property bool $HideVariations
 */
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ScheduledList'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ScheduledList',
            ],
            'ActiveList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActiveList',
            ],
            'SoldList'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldList',
            ],
            'UnsoldList'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnsoldList',
            ],
            'DeletedFromSoldList'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromSoldList',
            ],
            'DeletedFromUnsoldList' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeletedFromUnsoldList',
            ],
            'SellingSummary'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemListCustomizationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingSummary',
            ],
            'HideVariations'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HideVariations',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBaySellingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
