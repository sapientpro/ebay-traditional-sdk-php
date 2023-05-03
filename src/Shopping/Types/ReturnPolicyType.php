<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Refund
 * @property string $ReturnsWithin
 * @property string $ReturnsAccepted
 * @property string $Description
 * @property string $WarrantyOffered
 * @property string $WarrantyType
 * @property string $WarrantyDuration
 * @property string $EAN
 * @property string $ShippingCostPaidBy
 * @property string $RestockingFeeValue
 * @property string $RestockingFeeValueOption
 */
class ReturnPolicyType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Refund'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Refund',
            ],
            'ReturnsWithin'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnsWithin',
            ],
            'ReturnsAccepted'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnsAccepted',
            ],
            'Description'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'WarrantyOffered'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WarrantyOffered',
            ],
            'WarrantyType'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WarrantyType',
            ],
            'WarrantyDuration'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WarrantyDuration',
            ],
            'EAN'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EAN',
            ],
            'ShippingCostPaidBy'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCostPaidBy',
            ],
            'RestockingFeeValue'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RestockingFeeValue',
            ],
            'RestockingFeeValueOption' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RestockingFeeValueOption',
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
