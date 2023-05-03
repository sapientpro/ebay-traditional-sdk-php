<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ProductIdentifier $productIdentifier
 * @property StockPhotoURL $stockPhotoURL
 * @property PropertyValue[] $productDetails
 * @property ProductStatus $productStatus
 * @property int $compatibilityCount
 * @property string $type
 * @property Notes $notes
 */
class Product extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productIdentifier'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductIdentifier',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productIdentifier',
            ],
            'stockPhotoURL'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\StockPhotoURL',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'stockPhotoURL',
            ],
            'productDetails'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PropertyValue',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productDetails',
            ],
            'productStatus'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductStatus',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productStatus',
            ],
            'compatibilityCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'compatibilityCount',
            ],
            'type'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'type',
            ],
            'notes'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\Notes',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'notes',
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
