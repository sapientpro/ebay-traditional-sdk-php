<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use function array_key_exists;

/**
 * @property int $ApproximatePages
 * @property bool $MoreResults
 * @property DomainHistogramType $DomainHistogram
 * @property int $PageNumber
 * @property CatalogProductType[] $Product
 * @property int $TotalProducts
 * @property bool $DuplicateItems
 */
class FindProductsResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ApproximatePages' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ApproximatePages',
            ],
            'MoreResults'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MoreResults',
            ],
            'DomainHistogram'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\DomainHistogramType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DomainHistogram',
            ],
            'PageNumber'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'Product'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\CatalogProductType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Product',
            ],
            'TotalProducts'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalProducts',
            ],
            'DuplicateItems'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DuplicateItems',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
