<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\ReportTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DimensionMetadata[] $dimensionMetadata
 * @property int $maxNumberOfDimensionsToRequest
 * @property int $maxNumberOfMetricsToRequest
 * @property MetricMetadata[] $metricMetadata
 * @property ReportTypeEnum $reportType
 */
class ReportMetadata extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'dimensionMetadata'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\DimensionMetadata',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dimensionMetadata',
            ],
            'maxNumberOfDimensionsToRequest' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxNumberOfDimensionsToRequest',
            ],
            'maxNumberOfMetricsToRequest'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxNumberOfMetricsToRequest',
            ],
            'metricMetadata'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\MetricMetadata',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'metricMetadata',
            ],
            'reportType'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reportType',
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
