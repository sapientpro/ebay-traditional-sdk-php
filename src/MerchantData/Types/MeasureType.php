<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\MeasurementSystemCodeType;
use SapientPro\EbayTraditionalSDK\Types\DecimalType;

use function array_key_exists;

/**
 * @property string $unit
 * @property MeasurementSystemCodeType $measurementSystem
 */
class MeasureType extends DecimalType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'unit'              => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'unit',
            ],
            'measurementSystem' => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'measurementSystem',
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
