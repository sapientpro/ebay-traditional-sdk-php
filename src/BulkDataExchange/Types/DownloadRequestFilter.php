<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BulkDataExchange\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property FeeSettlementReportFilter $feeSettlementReportFilter
 * @property SiteFilter $siteFilter
 * @property ActiveInventoryReportFilter $activeInventoryReportFilter
 * @property DateFilter $dateFilter
 * @property SoldReportFilter $soldReportFilter
 * @property OrderReportFilter $orderReportFilter
 */
class DownloadRequestFilter extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'feeSettlementReportFilter'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\FeeSettlementReportFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'feeSettlementReportFilter',
            ],
            'siteFilter'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\SiteFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'siteFilter',
            ],
            'activeInventoryReportFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\ActiveInventoryReportFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'activeInventoryReportFilter',
            ],
            'dateFilter'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DateFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dateFilter',
            ],
            'soldReportFilter'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\SoldReportFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldReportFilter',
            ],
            'orderReportFilter'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\OrderReportFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'orderReportFilter',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
