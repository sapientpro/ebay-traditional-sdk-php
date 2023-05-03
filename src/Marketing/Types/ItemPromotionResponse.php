<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Marketing\Enums\PromotionPriorityEnum;
use SapientPro\EbayTraditionalSDK\Marketing\Enums\PromotionStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $description
 * @property DiscountRule[] $discountRules
 * @property string $endDate
 * @property InventoryCriterion $inventoryCriterion
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property PromotionPriorityEnum $priority
 * @property string $promotionId
 * @property string $promotionImageUrl
 * @property PromotionStatusEnum $promotionStatus
 * @property string $startDate
 */
class ItemPromotionResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'description'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'discountRules'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\DiscountRule',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'discountRules',
            ],
            'endDate'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endDate',
            ],
            'inventoryCriterion' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\InventoryCriterion',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventoryCriterion',
            ],
            'marketplaceId'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'name'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'name',
            ],
            'priority'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priority',
            ],
            'promotionId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionId',
            ],
            'promotionImageUrl'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionImageUrl',
            ],
            'promotionStatus'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionStatus',
            ],
            'startDate'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'startDate',
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
