<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $HardExpirationWarning
 * @property string $Ack
 * @property string $Version
 * @property ErrorType[] $Errors
 * @property OrderArrayType $OrderArray
 */
class OrderReportResponseType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'HardExpirationWarning' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HardExpirationWarning',
            ],
            'Ack'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Ack',
            ],
            'Version'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Version',
            ],
            'Errors'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ErrorType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Errors',
            ],
            'OrderArray'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderArray',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'OrderReport';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
