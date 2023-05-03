<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\StoreCustomHeaderLayoutCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\StoreHeaderStyleCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\StoreItemListLayoutCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\StoreItemListSortOrderCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\StoreSubscriptionLevelCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Name
 * @property string $URLPath
 * @property string $URL
 * @property StoreSubscriptionLevelCodeType $SubscriptionLevel
 * @property string $Description
 * @property StoreLogoType $Logo
 * @property StoreThemeType $Theme
 * @property StoreHeaderStyleCodeType $HeaderStyle
 * @property int $HomePage
 * @property StoreItemListLayoutCodeType $ItemListLayout
 * @property StoreItemListSortOrderCodeType $ItemListSortOrder
 * @property StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
 * @property string $CustomHeader
 * @property bool $ExportListings
 * @property StoreCustomCategoryArrayType $CustomCategories
 * @property StoreCustomListingHeaderType $CustomListingHeader
 * @property DateTime $LastOpenedTime
 * @property bool $TitleWithCompatibility
 */
class StoreType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Name'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'URLPath'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'URLPath',
            ],
            'URL'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'URL',
            ],
            'SubscriptionLevel'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SubscriptionLevel',
            ],
            'Description'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'Logo'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreLogoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Logo',
            ],
            'Theme'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreThemeType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Theme',
            ],
            'HeaderStyle'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HeaderStyle',
            ],
            'HomePage'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HomePage',
            ],
            'ItemListLayout'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemListLayout',
            ],
            'ItemListSortOrder'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemListSortOrder',
            ],
            'CustomHeaderLayout'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CustomHeaderLayout',
            ],
            'CustomHeader'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CustomHeader',
            ],
            'ExportListings'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExportListings',
            ],
            'CustomCategories'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreCustomCategoryArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CustomCategories',
            ],
            'CustomListingHeader'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreCustomListingHeaderType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CustomListingHeader',
            ],
            'LastOpenedTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastOpenedTime',
            ],
            'TitleWithCompatibility' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TitleWithCompatibility',
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
