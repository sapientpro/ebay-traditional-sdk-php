<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $globalId
 * @property ReturnResponseHistoryType[] $returnHistory
 * @property RefundInfoType $refundInfo
 * @property ReturnPolicyInfoType $returnPolicy
 * @property ShipmentType $buyerReturnShipment
 * @property ShipmentType[] $shipmentInfo
 * @property CaseIdType $caseId
 */
class ReturnDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'globalId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'globalId',
            ],
            'returnHistory'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnResponseHistoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'returnHistory',
            ],
            'refundInfo'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\RefundInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundInfo',
            ],
            'returnPolicy'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnPolicyInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPolicy',
            ],
            'buyerReturnShipment' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerReturnShipment',
            ],
            'shipmentInfo'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ShipmentType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shipmentInfo',
            ],
            'caseId'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\CaseIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
