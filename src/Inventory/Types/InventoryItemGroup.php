<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property mixed $aspects
 * @property string $description
 * @property string[] $imageUrls
 * @property string $inventoryItemGroupKey
 * @property string $subtitle
 * @property string $title
 * @property string[] $variantSKUs
 * @property VariesBy $variesBy
 */
class InventoryItemGroup extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'aspects'               => [
                'type'        => 'any',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspects',
            ],
            'description'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'imageUrls'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'imageUrls',
            ],
            'inventoryItemGroupKey' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventoryItemGroupKey',
            ],
            'subtitle'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subtitle',
            ],
            'title'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'variantSKUs'           => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'variantSKUs',
            ],
            'variesBy'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\VariesBy',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'variesBy',
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
