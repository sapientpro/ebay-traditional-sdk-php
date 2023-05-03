<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property LineItemReference[] $lineItems
 * @property string $shippedDate
 * @property string $shippingCarrierCode
 * @property string $trackingNumber
 */
class ShippingFulfillmentDetails extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'lineItems'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\LineItemReference',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'lineItems',
            ],
            'shippedDate'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippedDate',
            ],
            'shippingCarrierCode' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierCode',
            ],
            'trackingNumber'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
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
