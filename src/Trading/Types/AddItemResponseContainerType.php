<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DiscountReasonCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property DateTime $StartTime
 * @property DateTime $EndTime
 * @property FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property string $CorrelationID
 * @property ErrorType[] $Errors
 * @property string $Message
 * @property DiscountReasonCodeType[] $DiscountReason
 * @property ListingRecommendationsType $ListingRecommendations
 */
class AddItemResponseContainerType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'StartTime'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'EndTime'                => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'Fees'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Fees',
            ],
            'CategoryID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'Category2ID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Category2ID',
            ],
            'CorrelationID'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CorrelationID',
            ],
            'Errors'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ErrorType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Errors',
            ],
            'Message'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Message',
            ],
            'DiscountReason'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DiscountReason',
            ],
            'ListingRecommendations' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingRecommendationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingRecommendations',
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
