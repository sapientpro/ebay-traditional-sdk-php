<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property FeedbackDetailArrayType $FeedbackDetailArray
 * @property int $FeedbackDetailItemTotal
 * @property FeedbackSummaryType $FeedbackSummary
 * @property int $FeedbackScore
 * @property PaginationResultType $PaginationResult
 * @property int $EntriesPerPage
 * @property int $PageNumber
 */
class GetFeedbackResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'FeedbackDetailArray'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackDetailArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackDetailArray',
            ],
            'FeedbackDetailItemTotal' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackDetailItemTotal',
            ],
            'FeedbackSummary'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackSummary',
            ],
            'FeedbackScore'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackScore',
            ],
            'PaginationResult'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'EntriesPerPage'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EntriesPerPage',
            ],
            'PageNumber'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
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
