<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\MinimumAdvertisedPriceExposureCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PricingTreatmentCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $OriginalRetailPrice
 * @property AmountType $MinimumAdvertisedPrice
 * @property MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
 * @property PricingTreatmentCodeType $PricingTreatment
 * @property bool $SoldOneBay
 * @property bool $SoldOffeBay
 * @property AmountType $MadeForOutletComparisonPrice
 */
class DiscountPriceInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OriginalRetailPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OriginalRetailPrice',
            ],
            'MinimumAdvertisedPrice'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumAdvertisedPrice',
            ],
            'MinimumAdvertisedPriceExposure' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumAdvertisedPriceExposure',
            ],
            'PricingTreatment'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PricingTreatment',
            ],
            'SoldOneBay'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldOneBay',
            ],
            'SoldOffeBay'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldOffeBay',
            ],
            'MadeForOutletComparisonPrice'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MadeForOutletComparisonPrice',
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
