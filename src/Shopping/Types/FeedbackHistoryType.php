<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property FeedbackPeriodType[] $BidRetractionFeedbackPeriods
 * @property FeedbackPeriodType[] $NegativeFeedbackPeriods
 * @property FeedbackPeriodType[] $NeutralFeedbackPeriods
 * @property FeedbackPeriodType[] $PositiveFeedbackPeriods
 * @property FeedbackPeriodType[] $TotalFeedbackPeriods
 * @property int $UniqueNegativeFeedbackCount
 * @property int $UniquePositiveFeedbackCount
 * @property AverageRatingDetailsType[] $AverageRatingDetails
 * @property int $NeutralCommentCountFromSuspendedUsers
 * @property int $UniqueNeutralFeedbackCount
 */
class FeedbackHistoryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BidRetractionFeedbackPeriods'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackPeriodType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'BidRetractionFeedbackPeriods',
            ],
            'NegativeFeedbackPeriods'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackPeriodType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'NegativeFeedbackPeriods',
            ],
            'NeutralFeedbackPeriods'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackPeriodType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'NeutralFeedbackPeriods',
            ],
            'PositiveFeedbackPeriods'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackPeriodType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PositiveFeedbackPeriods',
            ],
            'TotalFeedbackPeriods'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackPeriodType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'TotalFeedbackPeriods',
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
            'AverageRatingDetails'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AverageRatingDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AverageRatingDetails',
            ],
            'NeutralCommentCountFromSuspendedUsers' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NeutralCommentCountFromSuspendedUsers',
            ],
            'UniqueNeutralFeedbackCount'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueNeutralFeedbackCount',
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
