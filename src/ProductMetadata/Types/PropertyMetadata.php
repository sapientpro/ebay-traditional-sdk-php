<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $propertyName
 * @property string[] $alternatePropertyName
 * @property string $dataType
 * @property TypeSpecificInformation $typeSpecificInformation
 * @property bool $multiValued
 * @property string $canonicalName
 * @property Tag[] $propertyTags
 * @property string $description
 */
class PropertyMetadata extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'propertyName'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'propertyName',
            ],
            'alternatePropertyName'   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'alternatePropertyName',
            ],
            'dataType'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dataType',
            ],
            'typeSpecificInformation' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\TypeSpecificInformation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'typeSpecificInformation',
            ],
            'multiValued'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'multiValued',
            ],
            'canonicalName'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'canonicalName',
            ],
            'propertyTags'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\Tag',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'propertyTags',
            ],
            'description'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
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
