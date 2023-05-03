<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $averageItemDiscount
 * @property Amount $averageItemRevenue
 * @property Amount $averageOrderDiscount
 * @property Amount $averageOrderRevenue
 * @property string $averageOrderSize
 * @property Amount $baseSale
 * @property int $itemsSoldQuantity
 * @property int $numberOfOrdersSold
 * @property string $percentageSalesLift
 * @property string $promotionHref
 * @property string $promotionId
 * @property string $promotionReportId
 * @property Amount $promotionSale
 * @property Amount $totalDiscount
 * @property Amount $totalSale
 */
class PromotionReportDetail extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'averageItemDiscount'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'averageItemDiscount',
            ],
            'averageItemRevenue'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'averageItemRevenue',
            ],
            'averageOrderDiscount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'averageOrderDiscount',
            ],
            'averageOrderRevenue'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'averageOrderRevenue',
            ],
            'averageOrderSize'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'averageOrderSize',
            ],
            'baseSale'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'baseSale',
            ],
            'itemsSoldQuantity'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemsSoldQuantity',
            ],
            'numberOfOrdersSold'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'numberOfOrdersSold',
            ],
            'percentageSalesLift'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'percentageSalesLift',
            ],
            'promotionHref'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionHref',
            ],
            'promotionId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionId',
            ],
            'promotionReportId'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionReportId',
            ],
            'promotionSale'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'promotionSale',
            ],
            'totalDiscount'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'totalDiscount',
            ],
            'totalSale'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'totalSale',
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
