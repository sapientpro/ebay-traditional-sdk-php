<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property SearchStandingDashboardType $SearchStanding
 * @property SellerFeeDiscountDashboardType $SellerFeeDiscount
 * @property PowerSellerDashboardType $PowerSellerStatus
 * @property PolicyComplianceDashboardType $PolicyCompliance
 * @property BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property SellerAccountDashboardType $SellerAccount
 * @property PerformanceDashboardType[] $Performance
 */
class GetSellerDashboardResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SearchStanding'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SearchStandingDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SearchStanding',
            ],
            'SellerFeeDiscount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerFeeDiscountDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerFeeDiscount',
            ],
            'PowerSellerStatus' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PowerSellerDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PowerSellerStatus',
            ],
            'PolicyCompliance'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PolicyComplianceDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PolicyCompliance',
            ],
            'BuyerSatisfaction' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerSatisfactionDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerSatisfaction',
            ],
            'SellerAccount'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerAccountDashboardType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerAccount',
            ],
            'Performance'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PerformanceDashboardType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Performance',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
