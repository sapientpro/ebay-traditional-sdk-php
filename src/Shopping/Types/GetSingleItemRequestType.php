<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $VariationSKU
 * @property NameValueListArrayType $VariationSpecifics
 * @property string $IncludeSelector
 */
class GetSingleItemRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'VariationSKU'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSKU',
            ],
            'VariationSpecifics' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'IncludeSelector'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeSelector',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSingleItemRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
