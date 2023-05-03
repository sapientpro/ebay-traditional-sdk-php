<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\InsuranceOptionCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $InsuranceCost
 * @property InsuranceOptionCodeType $InsuranceOption
 * @property InternationalShippingServiceOptionType[] $InternationalShippingServiceOption
 * @property SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property ShippingServiceOptionType[] $ShippingServiceOption
 * @property TaxTableType $TaxTable
 * @property AmountType $InternationalInsuranceCost
 * @property InsuranceOptionCodeType $InternationalInsuranceOption
 * @property AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 */
class ShippingDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'InsuranceCost'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceCost',
            ],
            'InsuranceOption'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceOption',
            ],
            'InternationalShippingServiceOption' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\InternationalShippingServiceOptionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'InternationalShippingServiceOption',
            ],
            'SalesTax'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\SalesTaxType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalesTax',
            ],
            'ShippingRateErrorMessage'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingRateErrorMessage',
            ],
            'ShippingServiceOption'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ShippingServiceOptionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingServiceOption',
            ],
            'TaxTable'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\TaxTableType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxTable',
            ],
            'InternationalInsuranceCost'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalInsuranceCost',
            ],
            'InternationalInsuranceOption'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalInsuranceOption',
            ],
            'CODCost'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CODCost',
            ],
            'ExcludeShipToLocation'              => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExcludeShipToLocation',
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
