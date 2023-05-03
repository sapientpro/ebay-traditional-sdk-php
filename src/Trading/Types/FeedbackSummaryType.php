<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
 * @property FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
 * @property FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
 * @property FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
 * @property FeedbackPeriodArrayType $TotalFeedbackPeriodArray
 * @property int $NeutralCommentCountFromSuspendedUsers
 * @property int $UniqueNegativeFeedbackCount
 * @property int $UniquePositiveFeedbackCount
 * @property int $UniqueNeutralFeedbackCount
 * @property SellerRatingSummaryArrayType $SellerRatingSummaryArray
 * @property SellerRoleMetricsType $SellerRoleMetrics
 * @property BuyerRoleMetricsType $BuyerRoleMetrics
 */
class FeedbackSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BidRetractionFeedbackPeriodArray'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackPeriodArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BidRetractionFeedbackPeriodArray',
            ],
            'NegativeFeedbackPeriodArray'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackPeriodArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NegativeFeedbackPeriodArray',
            ],
            'NeutralFeedbackPeriodArray'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackPeriodArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NeutralFeedbackPeriodArray',
            ],
            'PositiveFeedbackPeriodArray'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackPeriodArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PositiveFeedbackPeriodArray',
            ],
            'TotalFeedbackPeriodArray'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackPeriodArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalFeedbackPeriodArray',
            ],
            'NeutralCommentCountFromSuspendedUsers' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NeutralCommentCountFromSuspendedUsers',
            ],
            'UniqueNegativeFeedbackCount'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueNegativeFeedbackCount',
            ],
            'UniquePositiveFeedbackCount'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniquePositiveFeedbackCount',
            ],
            'UniqueNeutralFeedbackCount'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueNeutralFeedbackCount',
            ],
            'SellerRatingSummaryArray'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerRatingSummaryArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerRatingSummaryArray',
            ],
            'SellerRoleMetrics'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerRoleMetricsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerRoleMetrics',
            ],
            'BuyerRoleMetrics'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerRoleMetricsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerRoleMetrics',
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
