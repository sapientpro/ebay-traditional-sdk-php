<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\MeasurementSystemCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\ShippingPackageCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $OriginatingPostalCode
 * @property MeasurementSystemCodeType $MeasurementUnit
 * @property MeasureType $PackageDepth
 * @property MeasureType $PackageLength
 * @property MeasureType $PackageWidth
 * @property AmountType $PackagingHandlingCosts
 * @property bool $ShippingIrregular
 * @property ShippingPackageCodeType $ShippingPackage
 * @property MeasureType $WeightMajor
 * @property MeasureType $WeightMinor
 * @property AmountType $InternationalPackagingHandlingCosts
 */
class CalculatedShippingRateType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OriginatingPostalCode'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OriginatingPostalCode',
            ],
            'MeasurementUnit'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MeasurementUnit',
            ],
            'PackageDepth'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageDepth',
            ],
            'PackageLength'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageLength',
            ],
            'PackageWidth'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageWidth',
            ],
            'PackagingHandlingCosts'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackagingHandlingCosts',
            ],
            'ShippingIrregular'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingIrregular',
            ],
            'ShippingPackage'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingPackage',
            ],
            'WeightMajor'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMajor',
            ],
            'WeightMinor'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMinor',
            ],
            'InternationalPackagingHandlingCosts' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalPackagingHandlingCosts',
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
