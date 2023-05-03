<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\CombinedPaymentPeriodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ModifyActionCodeType;

use function array_key_exists;

/**
 * @property CurrencyCodeType $CurrencyID
 * @property CombinedPaymentPeriodCodeType $CombinedDuration
 * @property ModifyActionCodeType $ModifyActionCode
 * @property FlatShippingDiscountType $FlatShippingDiscount
 * @property CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 */
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
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
            'CombinedDuration'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CombinedDuration',
            ],
            'ModifyActionCode'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModifyActionCode',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetShippingDiscountProfilesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
