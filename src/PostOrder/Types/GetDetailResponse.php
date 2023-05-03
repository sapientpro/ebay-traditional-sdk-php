<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ReturnDetailType $detail
 * @property ReturnSummaryType $summary
 */
class GetDetailResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'detail'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'detail',
            ],
            'summary' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'summary',
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
