<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $availableQuantity
 * @property string $categoryId
 * @property string $listingDescription
 * @property ListingPolicies $listingPolicies
 * @property string $merchantLocationKey
 * @property PricingSummary $pricingSummary
 * @property int $quantityLimitPerBuyer
 * @property string[] $storeCategoryNames
 * @property Tax $tax
 */
class EbayOfferDetailsWithId extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'availableQuantity'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'availableQuantity',
            ],
            'categoryId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'listingDescription'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingDescription',
            ],
            'listingPolicies'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ListingPolicies',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingPolicies',
            ],
            'merchantLocationKey'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'merchantLocationKey',
            ],
            'pricingSummary'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\PricingSummary',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'pricingSummary',
            ],
            'quantityLimitPerBuyer' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantityLimitPerBuyer',
            ],
            'storeCategoryNames'    => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'storeCategoryNames',
            ],
            'tax'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\Tax',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'tax',
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
