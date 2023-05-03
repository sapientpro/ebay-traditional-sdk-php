<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\CombinedPaymentPeriodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;

use function array_key_exists;

/**
 * @property CurrencyCodeType $CurrencyID
 * @property FlatShippingDiscountType $FlatShippingDiscount
 * @property CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property bool $PromotionalShippingDiscount
 * @property CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property CombinedPaymentPeriodCodeType $CombinedDuration
 */
class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CurrencyID'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CurrencyID',
            ],
            'FlatShippingDiscount'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FlatShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FlatShippingDiscount',
            ],
            'CalculatedShippingDiscount'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CalculatedShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CalculatedShippingDiscount',
            ],
            'PromotionalShippingDiscount'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalShippingDiscount',
            ],
            'CalculatedHandlingDiscount'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CalculatedHandlingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CalculatedHandlingDiscount',
            ],
            'PromotionalShippingDiscountDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PromotionalShippingDiscountDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalShippingDiscountDetails',
            ],
            'CombinedDuration'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CombinedDuration',
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
