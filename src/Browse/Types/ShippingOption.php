<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ConvertedAmount $additionalShippingCostPerUnit
 * @property string $cutOffDateUsedForEstimate
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property int $quantityUsedForEstimate
 * @property string $shippingCarrierCode
 * @property ConvertedAmount $shippingCost
 * @property string $shippingCostType
 * @property string $shippingServiceCode
 * @property ShipToLocation $shipToLocationUsedForEstimate
 * @property string $trademarkSymbol
 * @property string $type
 */
class ShippingOption extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'additionalShippingCostPerUnit' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'additionalShippingCostPerUnit',
            ],
            'cutOffDateUsedForEstimate'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cutOffDateUsedForEstimate',
            ],
            'maxEstimatedDeliveryDate'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxEstimatedDeliveryDate',
            ],
            'minEstimatedDeliveryDate'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minEstimatedDeliveryDate',
            ],
            'quantityUsedForEstimate'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantityUsedForEstimate',
            ],
            'shippingCarrierCode'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierCode',
            ],
            'shippingCost'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ConvertedAmount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingCostType'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCostType',
            ],
            'shippingServiceCode'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingServiceCode',
            ],
            'shipToLocationUsedForEstimate' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ShipToLocation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipToLocationUsedForEstimate',
            ],
            'trademarkSymbol'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trademarkSymbol',
            ],
            'type'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'type',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
