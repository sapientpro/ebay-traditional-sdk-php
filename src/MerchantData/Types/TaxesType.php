<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $TotalTaxAmount
 * @property TaxDetailsType[] $TaxDetails
 */
class TaxesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'TotalTaxAmount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalTaxAmount',
            ],
            'TaxDetails'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TaxDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'TaxDetails',
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
