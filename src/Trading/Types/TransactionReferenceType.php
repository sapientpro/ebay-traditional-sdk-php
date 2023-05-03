<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\TransactionReferenceCodeType;
use SapientPro\EbayTraditionalSDK\Types\StringType;

use function array_key_exists;

/**
 * @property TransactionReferenceCodeType $type
 */
class TransactionReferenceType extends StringType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'type' => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'type',
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
