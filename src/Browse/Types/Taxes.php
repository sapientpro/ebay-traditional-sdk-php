<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $includedInPrice
 * @property bool $shippingAndHandlingTaxed
 * @property TaxJurisdiction $taxJurisdiction
 * @property string $taxPercentage
 * @property TaxType $taxType
 */
class Taxes extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'includedInPrice'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'includedInPrice',
            ],
            'shippingAndHandlingTaxed' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingAndHandlingTaxed',
            ],
            'taxJurisdiction'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\TaxJurisdiction',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'taxJurisdiction',
            ],
            'taxPercentage'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'taxPercentage',
            ],
            'taxType'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\TaxType|string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'taxType',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
