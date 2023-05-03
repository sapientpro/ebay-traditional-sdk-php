<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Finding\Enums\MapExposureEnum;
use SapientPro\EbayTraditionalSDK\Finding\Enums\PriceTreatmentEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $originalRetailPrice
 * @property MapExposureEnum $minimumAdvertisedPriceExposure
 * @property PriceTreatmentEnum $pricingTreatment
 * @property bool $soldOnEbay
 * @property bool $soldOffEbay
 */
class DiscountPriceInfo extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'originalRetailPrice'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originalRetailPrice',
            ],
            'minimumAdvertisedPriceExposure' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minimumAdvertisedPriceExposure',
            ],
            'pricingTreatment'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingTreatment',
            ],
            'soldOnEbay'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldOnEbay',
            ],
            'soldOffEbay'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldOffEbay',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
