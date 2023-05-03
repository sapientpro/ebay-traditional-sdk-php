<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DiscountCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PromotionalSaleStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PromotionalSaleTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $PromotionalSaleID
 * @property string $PromotionalSaleName
 * @property ItemIDArrayType $PromotionalSaleItemIDArray
 * @property PromotionalSaleStatusCodeType $Status
 * @property DiscountCodeType $DiscountType
 * @property float $DiscountValue
 * @property DateTime $PromotionalSaleStartTime
 * @property DateTime $PromotionalSaleEndTime
 * @property PromotionalSaleTypeCodeType $PromotionalSaleType
 */
class PromotionalSaleType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PromotionalSaleID'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleID',
            ],
            'PromotionalSaleName'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleName',
            ],
            'PromotionalSaleItemIDArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleItemIDArray',
            ],
            'Status'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'DiscountType'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountType',
            ],
            'DiscountValue'              => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountValue',
            ],
            'PromotionalSaleStartTime'   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleStartTime',
            ],
            'PromotionalSaleEndTime'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleEndTime',
            ],
            'PromotionalSaleType'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleType',
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
