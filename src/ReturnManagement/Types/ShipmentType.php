<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ShipmentStatusType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ShipmentStatusType $shipmentStatus
 * @property string $trackingNumber
 * @property string $carrierUsed
 * @property DateTime $deliveryDate
 * @property Amount $shippingCost
 * @property Address $shippingAddress
 * @property string $returnMerchandiseAuthorization
 * @property DateTime $minEstDeliveryDate
 * @property DateTime $maxEstDeliveryDate
 */
class ShipmentType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'shipmentStatus'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipmentStatus',
            ],
            'trackingNumber'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
            ],
            'carrierUsed'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierUsed',
            ],
            'deliveryDate'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deliveryDate',
            ],
            'shippingCost'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'shippingAddress'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\Address',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingAddress',
            ],
            'returnMerchandiseAuthorization' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnMerchandiseAuthorization',
            ],
            'minEstDeliveryDate'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minEstDeliveryDate',
            ],
            'maxEstDeliveryDate'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxEstDeliveryDate',
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
