<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $baseSale
 * @property string $lastUpdated
 * @property string $percentageSalesLift
 * @property Amount $promotionSale
 * @property Amount $totalSale
 */
class SummaryReportResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'baseSale'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'baseSale',
            ],
            'lastUpdated'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastUpdated',
            ],
            'percentageSalesLift' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'percentageSalesLift',
            ],
            'promotionSale'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionSale',
            ],
            'totalSale'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'totalSale',
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
