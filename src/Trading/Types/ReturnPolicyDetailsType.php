<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property RefundDetailsType[] $Refund
 * @property ReturnsWithinDetailsType[] $ReturnsWithin
 * @property ReturnsAcceptedDetailsType[] $ReturnsAccepted
 * @property bool $Description
 * @property WarrantyOfferedDetailsType[] $WarrantyOffered
 * @property WarrantyTypeDetailsType[] $WarrantyType
 * @property WarrantyDurationDetailsType[] $WarrantyDuration
 * @property bool $EAN
 * @property ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
 * @property RestockingFeeValueDetailsType[] $RestockingFeeValue
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 */
class ReturnPolicyDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Refund'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RefundDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Refund',
            ],
            'ReturnsWithin'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReturnsWithinDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReturnsWithin',
            ],
            'ReturnsAccepted'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ReturnsAcceptedDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReturnsAccepted',
            ],
            'Description'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'WarrantyOffered'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\WarrantyOfferedDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'WarrantyOffered',
            ],
            'WarrantyType'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\WarrantyTypeDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'WarrantyType',
            ],
            'WarrantyDuration'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\WarrantyDurationDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'WarrantyDuration',
            ],
            'EAN'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EAN',
            ],
            'ShippingCostPaidBy' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingCostPaidByDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingCostPaidBy',
            ],
            'RestockingFeeValue' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RestockingFeeValueDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RestockingFeeValue',
            ],
            'DetailVersion'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailVersion',
            ],
            'UpdateTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
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
