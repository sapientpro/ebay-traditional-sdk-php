<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property URITypeSpecificInformation $uriTypeSpecificInformation
 * @property NumericTypeSpecificInformation $numericTypeSpecificInformation
 * @property MediaTypeSpecificInformation $mediaTypeSpecificInformation
 * @property StringTypeSpecificInformation $stringTypeSpecificInformation
 */
class TypeSpecificInformation extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'uriTypeSpecificInformation'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\URITypeSpecificInformation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'uriTypeSpecificInformation',
            ],
            'numericTypeSpecificInformation' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\NumericTypeSpecificInformation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'numericTypeSpecificInformation',
            ],
            'mediaTypeSpecificInformation'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\MediaTypeSpecificInformation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'mediaTypeSpecificInformation',
            ],
            'stringTypeSpecificInformation'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\StringTypeSpecificInformation',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'stringTypeSpecificInformation',
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
