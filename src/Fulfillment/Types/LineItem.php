<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\LineItemFulfillmentStatusEnum;
use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\SoldFormatEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AppliedPromotion[] $appliedPromotions
 * @property DeliveryCost $deliveryCost
 * @property Amount $discountedLineItemCost
 * @property GiftDetails $giftDetails
 * @property string $legacyItemId
 * @property string $legacyVariationId
 * @property Amount $lineItemCost
 * @property LineItemFulfillmentInstructions $lineItemFulfillmentInstructions
 * @property LineItemFulfillmentStatusEnum $lineItemFulfillmentStatus
 * @property string $lineItemId
 * @property MarketplaceIdEnum $listingMarketplaceId
 * @property LineItemProperties $properties
 * @property MarketplaceIdEnum $purchaseMarketplaceId
 * @property int $quantity
 * @property LineItemRefund[] $refunds
 * @property string $sku
 * @property SoldFormatEnum $soldFormat
 * @property Tax[] $taxes
 * @property string $title
 * @property Amount $total
 */
class LineItem extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'appliedPromotions'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\AppliedPromotion',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'appliedPromotions',
            ],
            'deliveryCost'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\DeliveryCost',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deliveryCost',
            ],
            'discountedLineItemCost'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountedLineItemCost',
            ],
            'giftDetails'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\GiftDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'giftDetails',
            ],
            'legacyItemId'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'legacyItemId',
            ],
            'legacyVariationId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'legacyVariationId',
            ],
            'lineItemCost'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemCost',
            ],
            'lineItemFulfillmentInstructions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\LineItemFulfillmentInstructions',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemFulfillmentInstructions',
            ],
            'lineItemFulfillmentStatus'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemFulfillmentStatus',
            ],
            'lineItemId'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lineItemId',
            ],
            'listingMarketplaceId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingMarketplaceId',
            ],
            'properties'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\LineItemProperties',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'properties',
            ],
            'purchaseMarketplaceId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'purchaseMarketplaceId',
            ],
            'quantity'                        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantity',
            ],
            'refunds'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\LineItemRefund',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'refunds',
            ],
            'sku'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sku',
            ],
            'soldFormat'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'soldFormat',
            ],
            'taxes'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Tax',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'taxes',
            ],
            'title'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'title',
            ],
            'total'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'total',
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
