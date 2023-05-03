<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Analytics\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $endDate
 * @property Header $header
 * @property string $lastUpdatedDate
 * @property Record[] $records
 * @property string $startDate
 * @property ErrorDetailV3[] $warnings
 */
class Report extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'endDate'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endDate',
            ],
            'header'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Header',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'header',
            ],
            'lastUpdatedDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastUpdatedDate',
            ],
            'records'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Record',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'records',
            ],
            'startDate'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'startDate',
            ],
            'warnings'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\ErrorDetailV3',
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
