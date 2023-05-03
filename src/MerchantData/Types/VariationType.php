<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $SKU
 * @property AmountType $StartPrice
 * @property int $Quantity
 * @property NameValueListArrayType[] $VariationSpecifics
 * @property int $UnitsAvailable
 * @property AmountType $UnitCost
 * @property SellingStatusType $SellingStatus
 * @property string $VariationTitle
 * @property string $VariationViewItemURL
 * @property bool $Delete
 * @property SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property int $WatchCount
 * @property string $PrivateNotes
 * @property DiscountPriceInfoType $DiscountPriceInfo
 * @property VariationProductListingDetailsType $VariationProductListingDetails
 */
class VariationType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SKU'                                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'StartPrice'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartPrice',
            ],
            'Quantity'                             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Quantity',
            ],
            'VariationSpecifics'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\NameValueListArrayType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'UnitsAvailable'                       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnitsAvailable',
            ],
            'UnitCost'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UnitCost',
            ],
            'SellingStatus'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SellingStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingStatus',
            ],
            'VariationTitle'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationTitle',
            ],
            'VariationViewItemURL'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationViewItemURL',
            ],
            'Delete'                               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Delete',
            ],
            'SellingManagerProductInventoryStatus' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SellingManagerProductInventoryStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductInventoryStatus',
            ],
            'WatchCount'                           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WatchCount',
            ],
            'PrivateNotes'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PrivateNotes',
            ],
            'DiscountPriceInfo'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\DiscountPriceInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountPriceInfo',
            ],
            'VariationProductListingDetails'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VariationProductListingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationProductListingDetails',
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
