<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ConflictingProduct[] $conflictingProducts
 * @property Correction[] $corrections
 * @property string $epid
 * @property string $productHref
 * @property Violation[] $violations
 */
class ProcessResolution extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'conflictingProducts' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ConflictingProduct',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'conflictingProducts',
            ],
            'corrections'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Correction',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'corrections',
            ],
            'epid'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'epid',
            ],
            'productHref'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productHref',
            ],
            'violations'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\Violation',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'violations',
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
