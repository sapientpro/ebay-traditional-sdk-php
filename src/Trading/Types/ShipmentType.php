<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShipmentDeliveryStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShipmentStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingFeatureCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingPackageCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $EstimatedDeliveryDate
 * @property AmountType $InsuredValue
 * @property MeasureType $PackageDepth
 * @property MeasureType $PackageLength
 * @property MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property int $ShipmentID
 * @property AmountType $PostageTotal
 * @property DateTime $PrintedTime
 * @property AddressType $ShipFromAddress
 * @property AddressType $ShippingAddress
 * @property ShippingFeatureCodeType[] $ShippingFeature
 * @property ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property MeasureType $WeightMajor
 * @property MeasureType $WeightMinor
 * @property ItemTransactionIDType[] $ItemTransactionID
 * @property DateTime $DeliveryDate
 * @property ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property DateTime $RefundGrantedTime
 * @property DateTime $RefundRequestedTime
 * @property ShipmentStatusCodeType $Status
 * @property DateTime $ShippedTime
 * @property ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'EstimatedDeliveryDate'   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EstimatedDeliveryDate',
            ],
            'InsuredValue'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuredValue',
            ],
            'PackageDepth'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageDepth',
            ],
            'PackageLength'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageLength',
            ],
            'PackageWidth'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PackageWidth',
            ],
            'PayPalShipmentID'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalShipmentID',
            ],
            'ShipmentID'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipmentID',
            ],
            'PostageTotal'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PostageTotal',
            ],
            'PrintedTime'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrintedTime',
            ],
            'ShipFromAddress'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipFromAddress',
            ],
            'ShippingAddress'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingAddress',
            ],
            'ShippingFeature'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingFeature',
            ],
            'ShippingPackage'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingPackage',
            ],
            'ShippingServiceUsed'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceUsed',
            ],
            'WeightMajor'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMajor',
            ],
            'WeightMinor'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightMinor',
            ],
            'ItemTransactionID'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemTransactionIDType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ItemTransactionID',
            ],
            'DeliveryDate'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeliveryDate',
            ],
            'DeliveryStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeliveryStatus',
            ],
            'RefundGrantedTime'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundGrantedTime',
            ],
            'RefundRequestedTime'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundRequestedTime',
            ],
            'Status'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'ShippedTime'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedTime',
            ],
            'ShipmentTrackingDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShipmentTrackingDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShipmentTrackingDetails',
            ],
            'ShipmentLineItem'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShipmentLineItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipmentLineItem',
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
