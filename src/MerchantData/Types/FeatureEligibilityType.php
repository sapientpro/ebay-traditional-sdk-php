<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $QualifiesForBuyItNow
 * @property bool $QualifiesForBuyItNowMultiple
 * @property bool $QualifiedForFixedPriceOneDayDuration
 * @property bool $QualifiesForVariations
 * @property bool $QualifiedForAuctionOneDayDuration
 */
class FeatureEligibilityType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'QualifiesForBuyItNow'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiesForBuyItNow',
            ],
            'QualifiesForBuyItNowMultiple'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiesForBuyItNowMultiple',
            ],
            'QualifiedForFixedPriceOneDayDuration' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiedForFixedPriceOneDayDuration',
            ],
            'QualifiesForVariations'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiesForVariations',
            ],
            'QualifiedForAuctionOneDayDuration'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiedForAuctionOneDayDuration',
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
