<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string[] $shipToLocation
 * @property string $shippingService
 * @property string $shippingType
 * @property int $sortOrderId
 * @property bool $freeShipping
 * @property Amount $codFee
 * @property bool $fastShipping
 * @property Amount $shippingServiceAdditionalCost
 * @property Amount $shippingServiceCost
 * @property Amount $shippingSurcharge
 * @property Amount $shippingOverrideFee
 * @property bool $buyerResponsibleForShipping
 */
class ShippingPolicyService extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'shipToLocation'                => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shipToLocation',
            ],
            'shippingService'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingService',
            ],
            'shippingType'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingType',
            ],
            'sortOrderId'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortOrderId',
            ],
            'freeShipping'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'freeShipping',
            ],
            'codFee'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'codFee',
            ],
            'fastShipping'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fastShipping',
            ],
            'shippingServiceAdditionalCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceAdditionalCost',
            ],
            'shippingServiceCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceCost',
            ],
            'shippingSurcharge'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingSurcharge',
            ],
            'shippingOverrideFee'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingOverrideFee',
            ],
            'buyerResponsibleForShipping'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerResponsibleForShipping',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
