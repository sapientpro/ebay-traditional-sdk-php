<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $proofOfShipmentUploaded
 * @property Text $sellerComments
 * @property bool $shippedWithTracking
 * @property string $shippingCarrierName
 * @property DateTime $shippingDate
 * @property string $trackingNumber
 */
class ShipmentInfoRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'proofOfShipmentUploaded' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'proofOfShipmentUploaded',
            ],
            'sellerComments'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Text',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerComments',
            ],
            'shippedWithTracking'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippedWithTracking',
            ],
            'shippingCarrierName'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCarrierName',
            ],
            'shippingDate'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingDate',
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
