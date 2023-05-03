<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Types;

use function array_key_exists;

/**
 * @property string $metadataVersion
 * @property PropertyValue[] $propertyValues
 * @property PropertyNameValue $propertyValuesTree
 * @property bool $treeFormat
 */
class GetCompatibilitySearchValuesResponse extends BaseServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'metadataVersion'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'metadataVersion',
            ],
            'propertyValues'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'propertyValues',
            ],
            'propertyValuesTree' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\PropertyNameValue',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'propertyValuesTree',
            ],
            'treeFormat'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'treeFormat',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
