<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\ShippingCostTypeEnum;
use SapientPro\EbayTraditionalSDK\Account\Enums\ShippingOptionTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ShippingCostTypeEnum $costType
 * @property Amount $insuranceFee
 * @property bool $insuranceOffered
 * @property ShippingOptionTypeEnum $optionType
 * @property Amount $packageHandlingCost
 * @property string $rateTableId
 * @property ShippingService[] $shippingServices
 */
class ShippingOption extends BaseType
{
    private static array $propertyTypes = [
            'costType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'costType',
            ],
            'insuranceFee'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'insuranceFee',
            ],
            'insuranceOffered'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'insuranceOffered',
            ],
            'optionType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'optionType',
            ],
            'packageHandlingCost' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'packageHandlingCost',
            ],
            'rateTableId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'rateTableId',
            ],
            'shippingServices'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ShippingService',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingServices',
            ],
    ];

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
