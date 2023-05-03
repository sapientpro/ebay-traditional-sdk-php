<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Types;

use function array_key_exists;

/**
 * @property VersionDetails $namesDetails
 * @property VersionDetails $valueDetails
 */
class GetCompatibilitySearchDataVersionResponse extends BaseServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'namesDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\VersionDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'namesDetails',
            ],
            'valueDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ProductMetadata\Types\VersionDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'valueDetails',
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