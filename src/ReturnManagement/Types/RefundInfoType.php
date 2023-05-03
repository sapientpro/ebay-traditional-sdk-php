<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $refundDue
 * @property EstimatedRefundDetailType $estimatedRefundDetail
 * @property ActualRefundDetailType $actualRefundDetail
 */
class RefundInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'refundDue'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundDue',
            ],
            'estimatedRefundDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\EstimatedRefundDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedRefundDetail',
            ],
            'actualRefundDetail'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ActualRefundDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actualRefundDetail',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
