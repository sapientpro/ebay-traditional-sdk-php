<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property VariationType[] $Variation
 * @property PicturesType[] $Pictures
 * @property NameValueListArrayType $VariationSpecificsSet
 * @property ModifyNameArrayType $ModifyNameList
 */
class VariationsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Variation'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VariationType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Variation',
            ],
            'Pictures'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PicturesType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Pictures',
            ],
            'VariationSpecificsSet' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecificsSet',
            ],
            'ModifyNameList'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ModifyNameArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModifyNameList',
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
