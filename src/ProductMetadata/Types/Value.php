<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property StringValue $text
 * @property NumericValue $number
 * @property URIValue $URL
 */
class Value extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'text'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\StringValue',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'text',
            ],
            'number' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\NumericValue',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'number',
            ],
            'URL'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\URIValue',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'URL',
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
