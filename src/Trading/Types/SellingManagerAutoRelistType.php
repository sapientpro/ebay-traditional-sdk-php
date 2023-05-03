<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAutoRelistTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SellingManagerAutoRelistTypeCodeType $Type
 * @property SellingManagerAutoRelistOptionCodeType $RelistCondition
 * @property int $RelistAfterDays
 * @property int $RelistAfterHours
 * @property string $RelistAtSpecificTimeOfDay
 * @property BestOfferDetailsType $BestOfferDetails
 * @property int $ListingHoldInventoryLevel
 */
class SellingManagerAutoRelistType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Type'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Type',
            ],
            'RelistCondition'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistCondition',
            ],
            'RelistAfterDays'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistAfterDays',
            ],
            'RelistAfterHours'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistAfterHours',
            ],
            'RelistAtSpecificTimeOfDay' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistAtSpecificTimeOfDay',
            ],
            'BestOfferDetails'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BestOfferDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferDetails',
            ],
            'ListingHoldInventoryLevel' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingHoldInventoryLevel',
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
