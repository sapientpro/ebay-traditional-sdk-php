<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $PositiveFeedbackLeftCount
 * @property int $NegativeFeedbackLeftCount
 * @property int $NeutralFeedbackLeftCount
 * @property float $FeedbackLeftPercent
 * @property int $RepeatBuyerCount
 * @property float $RepeatBuyerPercent
 * @property int $UniqueBuyerCount
 * @property float $TransactionPercent
 * @property int $CrossBorderTransactionCount
 * @property float $CrossBorderTransactionPercent
 */
class SellerRoleMetricsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PositiveFeedbackLeftCount'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PositiveFeedbackLeftCount',
            ],
            'NegativeFeedbackLeftCount'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NegativeFeedbackLeftCount',
            ],
            'NeutralFeedbackLeftCount'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NeutralFeedbackLeftCount',
            ],
            'FeedbackLeftPercent'           => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackLeftPercent',
            ],
            'RepeatBuyerCount'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RepeatBuyerCount',
            ],
            'RepeatBuyerPercent'            => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RepeatBuyerPercent',
            ],
            'UniqueBuyerCount'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueBuyerCount',
            ],
            'TransactionPercent'            => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionPercent',
            ],
            'CrossBorderTransactionCount'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTransactionCount',
            ],
            'CrossBorderTransactionPercent' => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CrossBorderTransactionPercent',
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
