<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingCarrierCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $ShippingCarrierID
 * @property string $Description
 * @property ShippingCarrierCodeType $ShippingCarrier
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 */
class ShippingCarrierDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingCarrierID' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCarrierID',
            ],
            'Description'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'ShippingCarrier'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCarrier',
            ],
            'DetailVersion'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailVersion',
            ],
            'UpdateTime'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
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
