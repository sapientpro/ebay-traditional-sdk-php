<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\EndReasonCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $Adult
 * @property bool $BindingAuction
 * @property bool $CheckoutEnabled
 * @property AmountType $ConvertedBuyItNowPrice
 * @property AmountType $ConvertedStartPrice
 * @property AmountType $ConvertedReservePrice
 * @property bool $HasReservePrice
 * @property string $RelistedItemID
 * @property string $SecondChanceOriginalItemID
 * @property DateTime $StartTime
 * @property DateTime $EndTime
 * @property string $ViewItemURL
 * @property bool $HasUnansweredQuestions
 * @property bool $HasPublicMessages
 * @property bool $BuyItNowAvailable
 * @property AmountType $MinimumBestOfferPrice
 * @property string $LocalListingDistance
 * @property string $TCROriginalItemID
 * @property string $ViewItemURLForNaturalSearch
 * @property AmountType $BestOfferAutoAcceptPrice
 * @property EndReasonCodeType $EndingReason
 */
class ListingDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Adult'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Adult',
            ],
            'BindingAuction'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BindingAuction',
            ],
            'CheckoutEnabled'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutEnabled',
            ],
            'ConvertedBuyItNowPrice'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedBuyItNowPrice',
            ],
            'ConvertedStartPrice'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedStartPrice',
            ],
            'ConvertedReservePrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ConvertedReservePrice',
            ],
            'HasReservePrice'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasReservePrice',
            ],
            'RelistedItemID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RelistedItemID',
            ],
            'SecondChanceOriginalItemID'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SecondChanceOriginalItemID',
            ],
            'StartTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'EndTime'                     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'ViewItemURL'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ViewItemURL',
            ],
            'HasUnansweredQuestions'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasUnansweredQuestions',
            ],
            'HasPublicMessages'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasPublicMessages',
            ],
            'BuyItNowAvailable'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyItNowAvailable',
            ],
            'MinimumBestOfferPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumBestOfferPrice',
            ],
            'LocalListingDistance'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LocalListingDistance',
            ],
            'TCROriginalItemID'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TCROriginalItemID',
            ],
            'ViewItemURLForNaturalSearch' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ViewItemURLForNaturalSearch',
            ],
            'BestOfferAutoAcceptPrice'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferAutoAcceptPrice',
            ],
            'EndingReason'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndingReason',
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
