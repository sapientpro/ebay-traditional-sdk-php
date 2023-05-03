<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $href
 * @property int $limit
 * @property string $next
 * @property int $offset
 * @property string $prev
 * @property ProductSummary[] $productSummaries
 * @property Refinement $refinement
 * @property int $total
 */
class ProductSearchResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'href'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'href',
            ],
            'limit'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'limit',
            ],
            'next'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'next',
            ],
            'offset'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'offset',
            ],
            'prev'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'prev',
            ],
            'productSummaries' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ProductSummary',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productSummaries',
            ],
            'refinement'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Refinement',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refinement',
            ],
            'total'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'total',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
