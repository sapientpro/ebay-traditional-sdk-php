<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $SKU
 * @property AmountType $Price
 * @property int $Quantity
 * @property NameValueListArrayType $VariationSpecifics
 * @property MerchantDataSellingStatusType $SellingStatus
 */
class MerchantDataVariationType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SKU'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'Price'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Price',
            ],
            'Quantity'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'VariationSpecifics' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'SellingStatus'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MerchantDataSellingStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingStatus',
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
