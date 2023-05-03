<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property StoreThemeArrayType $BasicThemeArray
 * @property StoreThemeArrayType $AdvancedThemeArray
 * @property StoreLogoArrayType $LogoArray
 * @property StoreSubscriptionArrayType $SubscriptionArray
 * @property int $MaxCategories
 * @property int $MaxCategoryLevels
 */
class GetStoreOptionsResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'BasicThemeArray'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreThemeArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BasicThemeArray',
            ],
            'AdvancedThemeArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreThemeArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdvancedThemeArray',
            ],
            'LogoArray'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreLogoArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogoArray',
            ],
            'SubscriptionArray'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreSubscriptionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SubscriptionArray',
            ],
            'MaxCategories'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxCategories',
            ],
            'MaxCategoryLevels'  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxCategoryLevels',
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
