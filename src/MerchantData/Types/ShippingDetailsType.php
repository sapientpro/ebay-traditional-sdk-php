<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\InsuranceOptionCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\ShippingRateTypeCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\ShippingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $GlobalShipping
 * @property CalculatedShippingRateType $CalculatedShippingRate
 * @property bool $ChangePaymentInstructions
 * @property AmountType $InsuranceFee
 * @property InsuranceOptionCodeType $InsuranceOption
 * @property bool $InsuranceWanted
 * @property bool $PaymentEdited
 * @property string $PaymentInstructions
 * @property SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property ShippingRateTypeCodeType $ShippingRateType
 * @property ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property ShippingTypeCodeType $ShippingType
 * @property int $SellingManagerSalesRecordNumber
 * @property TaxTableType $TaxTable
 * @property string $ShippingServiceUsed
 * @property AmountType $DefaultShippingCost
 * @property InsuranceDetailsType $InsuranceDetails
 * @property InsuranceDetailsType $InternationalInsuranceDetails
 * @property string $ShippingDiscountProfileID
 * @property FlatShippingDiscountType $FlatShippingDiscount
 * @property CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property bool $PromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property bool $InternationalPromotionalShippingDiscount
 * @property PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property bool $SellerExcludeShipToLocationsPreference
 * @property ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property RateTableDetailsType $RateTableDetails
 */
class ShippingDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'GlobalShipping'                           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GlobalShipping',
            ],
            'CalculatedShippingRate'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CalculatedShippingRateType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CalculatedShippingRate',
            ],
            'ChangePaymentInstructions'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ChangePaymentInstructions',
            ],
            'InsuranceFee'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceFee',
            ],
            'InsuranceOption'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceOption',
            ],
            'InsuranceWanted'                          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceWanted',
            ],
            'PaymentEdited'                            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentEdited',
            ],
            'PaymentInstructions'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentInstructions',
            ],
            'SalesTax'                                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SalesTaxType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalesTax',
            ],
            'ShippingRateErrorMessage'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingRateErrorMessage',
            ],
            'ShippingRateType'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingRateType',
            ],
            'ShippingServiceOptions'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShippingServiceOptionsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingServiceOptions',
            ],
            'InternationalShippingServiceOption'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\InternationalShippingServiceOptionsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'InternationalShippingServiceOption',
            ],
            'ShippingType'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingType',
            ],
            'SellingManagerSalesRecordNumber'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerSalesRecordNumber',
            ],
            'TaxTable'                                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TaxTableType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxTable',
            ],
            'ShippingServiceUsed'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceUsed',
            ],
            'DefaultShippingCost'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DefaultShippingCost',
            ],
            'InsuranceDetails'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\InsuranceDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceDetails',
            ],
            'InternationalInsuranceDetails'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\InsuranceDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalInsuranceDetails',
            ],
            'ShippingDiscountProfileID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDiscountProfileID',
            ],
            'FlatShippingDiscount'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FlatShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FlatShippingDiscount',
            ],
            'CalculatedShippingDiscount'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CalculatedShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CalculatedShippingDiscount',
            ],
            'PromotionalShippingDiscount'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalShippingDiscount',
            ],
            'InternationalShippingDiscountProfileID'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalShippingDiscountProfileID',
            ],
            'InternationalFlatShippingDiscount'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FlatShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalFlatShippingDiscount',
            ],
            'InternationalCalculatedShippingDiscount'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CalculatedShippingDiscountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalCalculatedShippingDiscount',
            ],
            'InternationalPromotionalShippingDiscount' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalPromotionalShippingDiscount',
            ],
            'PromotionalShippingDiscountDetails'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PromotionalShippingDiscountDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalShippingDiscountDetails',
            ],
            'CODCost'                                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CODCost',
            ],
            'ExcludeShipToLocation'                    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExcludeShipToLocation',
            ],
            'SellerExcludeShipToLocationsPreference'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerExcludeShipToLocationsPreference',
            ],
            'ShipmentTrackingDetails'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ShipmentTrackingDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShipmentTrackingDetails',
            ],
            'RateTableDetails'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RateTableDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RateTableDetails',
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
