<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AmountType $ShippingInsuranceCost
 * @property string $ShippingServiceName
 * @property AmountType $ShippingServiceCost
 * @property AmountType $ShippingServiceAdditionalCost
 * @property int $ShippingServicePriority
 * @property bool $ExpeditedService
 * @property int $ShippingTimeMin
 * @property int $ShippingTimeMax
 * @property AmountType $ShippingSurcharge
 * @property string[] $ShipsTo
 * @property DateTime $EstimatedDeliveryMinTime
 * @property DateTime $EstimatedDeliveryMaxTime
 * @property bool $FastAndFree
 * @property DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingInsuranceCost'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingInsuranceCost',
            ],
            'ShippingServiceName'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceName',
            ],
            'ShippingServiceCost'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCost',
            ],
            'ShippingServiceAdditionalCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceAdditionalCost',
            ],
            'ShippingServicePriority'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServicePriority',
            ],
            'ExpeditedService'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExpeditedService',
            ],
            'ShippingTimeMin'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMin',
            ],
            'ShippingTimeMax'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMax',
            ],
            'ShippingSurcharge'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingSurcharge',
            ],
            'ShipsTo'                       => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShipsTo',
            ],
            'EstimatedDeliveryMinTime'      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EstimatedDeliveryMinTime',
            ],
            'EstimatedDeliveryMaxTime'      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EstimatedDeliveryMaxTime',
            ],
            'FastAndFree'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FastAndFree',
            ],
            'ShippingServiceCutOffTime'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCutOffTime',
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
