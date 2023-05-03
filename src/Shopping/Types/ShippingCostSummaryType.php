<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\InsuranceOptionCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\ShippingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ShippingServiceName
 * @property AmountType $ShippingServiceCost
 * @property AmountType $InsuranceCost
 * @property ShippingTypeCodeType $ShippingType
 * @property bool $LocalPickup
 * @property InsuranceOptionCodeType $InsuranceOption
 * @property AmountType $ListedShippingServiceCost
 * @property AmountType $ImportCharge
 * @property string $LogisticPlanType
 */
class ShippingCostSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingServiceName'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceName',
            ],
            'ShippingServiceCost'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCost',
            ],
            'InsuranceCost'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceCost',
            ],
            'ShippingType'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingType',
            ],
            'LocalPickup'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalPickup',
            ],
            'InsuranceOption'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceOption',
            ],
            'ListedShippingServiceCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListedShippingServiceCost',
            ],
            'ImportCharge'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ImportCharge',
            ],
            'LogisticPlanType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogisticPlanType',
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
