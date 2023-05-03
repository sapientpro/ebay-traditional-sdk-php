<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $buyerTotalAmount
 * @property EstimatedRefundDetailType $estimatedRefundDetail
 * @property Amount $sellerTotalAmount
 */
class EstimatedRefundInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'buyerTotalAmount'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerTotalAmount',
            ],
            'estimatedRefundDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\EstimatedRefundDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedRefundDetail',
            ],
            'sellerTotalAmount'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerTotalAmount',
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
