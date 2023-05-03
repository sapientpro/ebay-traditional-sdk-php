<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $SKU
 * @property AmountType $StartPrice
 * @property int $Quantity
 * @property NameValueListArrayType[] $VariationSpecifics
 * @property SellingStatusType $SellingStatus
 * @property DiscountPriceInfoType $DiscountPriceInfo
 */
class VariationType extends BaseType
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
            'StartPrice'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartPrice',
            ],
            'Quantity'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'VariationSpecifics' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\NameValueListArrayType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'SellingStatus'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\SellingStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingStatus',
            ],
            'DiscountPriceInfo'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\DiscountPriceInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountPriceInfo',
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
