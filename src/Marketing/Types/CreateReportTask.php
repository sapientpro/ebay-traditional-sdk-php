<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\ReportFormatEnum;
use SapientPro\EbayTraditionalSDK\Marketing\Enums\ReportTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string[] $campaignIds
 * @property string $dateFrom
 * @property string $dateTo
 * @property Dimension[] $dimensions
 * @property InventoryReference[] $inventoryReferences
 * @property string[] $listingIds
 * @property Bas:MarketplaceIdEnum $marketplaceId
 * @property string[] $metricKeys
 * @property ReportFormatEnum $reportFormat
 * @property ReportTypeEnum $reportType
 */
class CreateReportTask extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'campaignIds'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'campaignIds',
            ],
            'dateFrom'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dateFrom',
            ],
            'dateTo'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dateTo',
            ],
            'dimensions'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Dimension',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dimensions',
            ],
            'inventoryReferences' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\InventoryReference',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'inventoryReferences',
            ],
            'listingIds'          => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'listingIds',
            ],
            'marketplaceId'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Bas:MarketplaceIdEnum',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'metricKeys'          => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'metricKeys',
            ],
            'reportFormat'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reportFormat',
            ],
            'reportType'          => [
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
