<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
 * @property SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class SellingManagerProductType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SellingManagerProductDetails'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductDetails',
            ],
            'SellingManagerTemplateDetailsArray'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerTemplateDetailsArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerTemplateDetailsArray',
            ],
            'SellingManagerProductInventoryStatus' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductInventoryStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductInventoryStatus',
            ],
            'SellingManagerProductSpecifics'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductSpecificsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductSpecifics',
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
