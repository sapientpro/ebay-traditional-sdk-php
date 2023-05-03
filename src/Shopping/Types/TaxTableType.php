<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property TaxJurisdictionType[] $TaxJurisdiction
 */
class TaxTableType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'TaxJurisdiction' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\TaxJurisdictionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'TaxJurisdiction',
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