<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property bool $IncludeWatchCount
 * @property bool $IncludeItemSpecifics
 * @property bool $IncludeTaxTable
 * @property string $SKU
 * @property string $VariationSKU
 * @property NameValueListArrayType $VariationSpecifics
 * @property string $TransactionID
 * @property bool $IncludeItemCompatibilityList
 */
class GetItemRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'IncludeWatchCount'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeWatchCount',
            ],
            'IncludeItemSpecifics'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeItemSpecifics',
            ],
            'IncludeTaxTable'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeTaxTable',
            ],
            'SKU'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'VariationSKU'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSKU',
            ],
            'VariationSpecifics'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'TransactionID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'IncludeItemCompatibilityList' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeItemCompatibilityList',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetItemRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
