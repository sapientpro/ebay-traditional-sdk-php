<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\FulfillmentInstructionsType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $ebaySupportedFulfillment
 * @property Address $finalDestinationAddress
 * @property FulfillmentInstructionsType $fulfillmentInstructionsType
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property ShippingStep $shippingStep
 */
class FulfillmentStartInstruction extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ebaySupportedFulfillment'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ebaySupportedFulfillment',
            ],
            'finalDestinationAddress'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Address',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'finalDestinationAddress',
            ],
            'fulfillmentInstructionsType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fulfillmentInstructionsType',
            ],
            'maxEstimatedDeliveryDate'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxEstimatedDeliveryDate',
            ],
            'minEstimatedDeliveryDate'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minEstimatedDeliveryDate',
            ],
            'shippingStep'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\ShippingStep',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingStep',
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
