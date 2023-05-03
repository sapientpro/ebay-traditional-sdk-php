<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\ShippingMethodEnum;
use SapientPro\EbayTraditionalSDK\PostOrder\Enums\TrackingStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $active
 * @property DateTime $actualDeliveryDate
 * @property DateTime $actualShipDate
 * @property string $carrierEnum
 * @property int $carrierId
 * @property string $carrierName
 * @property string $carrierUsed
 * @property DateTime $deliveryDate
 * @property TrackingStatusEnum $deliveryStatus
 * @property ReturnAddressType $destinationAddress
 * @property string $errorCode
 * @property string $labelAvailableUntilDate
 * @property DateTime $labelDate
 * @property string $labelId
 * @property bool $labelPrintExpired
 * @property bool $labelVoidExpired
 * @property bool $markAsReceived
 * @property DateTime $maxDeliveryEstimate
 * @property DateTime $minDeliveryEstimate
 * @property ReturnAddressType $originAddress
 * @property DateTime $shipDate
 * @property string $shipmentId
 * @property string $shippedBy
 * @property ShippingMethodEnum $shippingMethod
 * @property string $trackingNumber
 */
class ShipmentTrackingType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'active'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'active',
            ],
            'actualDeliveryDate'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actualDeliveryDate',
            ],
            'actualShipDate'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actualShipDate',
            ],
            'carrierEnum'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierEnum',
            ],
            'carrierId'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierId',
            ],
            'carrierName'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierName',
            ],
            'carrierUsed'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierUsed',
            ],
            'deliveryDate'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deliveryDate',
            ],
            'deliveryStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deliveryStatus',
            ],
            'destinationAddress'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'destinationAddress',
            ],
            'errorCode'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorCode',
            ],
            'labelAvailableUntilDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelAvailableUntilDate',
            ],
            'labelDate'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelDate',
            ],
            'labelId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelId',
            ],
            'labelPrintExpired'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelPrintExpired',
            ],
            'labelVoidExpired'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelVoidExpired',
            ],
            'markAsReceived'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'markAsReceived',
            ],
            'maxDeliveryEstimate'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxDeliveryEstimate',
            ],
            'minDeliveryEstimate'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'minDeliveryEstimate',
            ],
            'originAddress'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'originAddress',
            ],
            'shipDate'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipDate',
            ],
            'shipmentId'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shipmentId',
            ],
            'shippedBy'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippedBy',
            ],
            'shippingMethod'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingMethod',
            ],
            'trackingNumber'          => [
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
