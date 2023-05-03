<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\MeasurementSystemCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingPackageCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MeasurementSystemCodeType $MeasurementUnit
 * @property MeasureType $PackageDepth
 * @property MeasureType $PackageLength
 * @property MeasureType $PackageWidth
 * @property bool $ShippingIrregular
 * @property ShippingPackageCodeType $ShippingPackage
 * @property MeasureType $WeightMajor
 * @property MeasureType $WeightMinor
 */
class ShipPackageDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'MeasurementUnit'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MeasurementUnit',
            ],
            'PackageDepth'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageDepth',
            ],
            'PackageLength'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageLength',
            ],
            'PackageWidth'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageWidth',
            ],
            'ShippingIrregular' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingIrregular',
            ],
            'ShippingPackage'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingPackage',
            ],
            'WeightMajor'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMajor',
            ],
            'WeightMinor'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMinor',
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
