<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BoldTitleCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BorderCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\FeaturedFirstCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\FeaturedPlusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\GiftIconCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\HighlightCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\HomePageFeaturedCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProPackCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property BoldTitleCodeType $BoldTitle
 * @property BorderCodeType $Border
 * @property HighlightCodeType $Highlight
 * @property GiftIconCodeType $GiftIcon
 * @property HomePageFeaturedCodeType $HomePageFeatured
 * @property FeaturedFirstCodeType $FeaturedFirst
 * @property FeaturedPlusCodeType $FeaturedPlus
 * @property ProPackCodeType $ProPack
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 */
class ListingFeatureDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BoldTitle'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BoldTitle',
            ],
            'Border'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Border',
            ],
            'Highlight'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Highlight',
            ],
            'GiftIcon'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GiftIcon',
            ],
            'HomePageFeatured' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HomePageFeatured',
            ],
            'FeaturedFirst'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeaturedFirst',
            ],
            'FeaturedPlus'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeaturedPlus',
            ],
            'ProPack'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProPack',
            ],
            'DetailVersion'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailVersion',
            ],
            'UpdateTime'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
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
