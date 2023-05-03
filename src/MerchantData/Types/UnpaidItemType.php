<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\UnpaidItemCaseOpenTypeCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\UnpaidItemCaseStatusTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property UnpaidItemCaseStatusTypeCodeType $Status
 * @property UnpaidItemCaseOpenTypeCodeType $Type
 */
class UnpaidItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Status' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'Type'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Type',
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
