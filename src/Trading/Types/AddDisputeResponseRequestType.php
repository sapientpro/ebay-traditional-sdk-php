<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeActivityCodeType;

use function array_key_exists;

/**
 * @property string $DisputeID
 * @property string $MessageText
 * @property DisputeActivityCodeType $DisputeActivity
 * @property string $ShippingCarrierUsed
 * @property string $ShipmentTrackNumber
 * @property DateTime $ShippingTime
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DisputeID'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeID',
            ],
            'MessageText'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageText',
            ],
            'DisputeActivity'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeActivity',
            ],
            'ShippingCarrierUsed' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCarrierUsed',
            ],
            'ShipmentTrackNumber' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipmentTrackNumber',
            ],
            'ShippingTime'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTime',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'AddDisputeResponseRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
