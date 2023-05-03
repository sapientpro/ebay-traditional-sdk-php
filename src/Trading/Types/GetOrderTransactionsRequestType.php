<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\TransactionPlatformCodeType;

use function array_key_exists;

/**
 * @property ItemTransactionIDArrayType $ItemTransactionIDArray
 * @property OrderIDArrayType $OrderIDArray
 * @property TransactionPlatformCodeType $Platform
 * @property bool $IncludeFinalValueFees
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemTransactionIDArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemTransactionIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTransactionIDArray',
            ],
            'OrderIDArray'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\OrderIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderIDArray',
            ],
            'Platform'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Platform',
            ],
            'IncludeFinalValueFees'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeFinalValueFees',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetOrderTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
