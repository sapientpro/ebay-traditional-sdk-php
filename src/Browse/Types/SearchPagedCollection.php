<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $href
 * @property ItemSummary[] $itemSummaries
 * @property int $limit
 * @property string $next
 * @property int $offset
 * @property string $prev
 * @property Refinement $refinement
 * @property int $total
 * @property ErrorDetailV3[] $warnings
 */
class SearchPagedCollection extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'href'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'href',
            ],
            'itemSummaries' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ItemSummary',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemSummaries',
            ],
            'limit'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'limit',
            ],
            'next'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'next',
            ],
            'offset'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'offset',
            ],
            'prev'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'prev',
            ],
            'refinement'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Refinement',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refinement',
            ],
            'total'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'total',
            ],
            'warnings'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
