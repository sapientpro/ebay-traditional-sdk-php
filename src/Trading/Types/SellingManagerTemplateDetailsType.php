<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $SaleTemplateID
 * @property string $SaleTemplateName
 * @property float $SuccessPercent
 * @property SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property ItemType $Template
 */
class SellingManagerTemplateDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SaleTemplateID'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTemplateID',
            ],
            'SaleTemplateName'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTemplateName',
            ],
            'SuccessPercent'               => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SuccessPercent',
            ],
            'SellingManagerProductDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductDetails',
            ],
            'Template'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Template',
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
