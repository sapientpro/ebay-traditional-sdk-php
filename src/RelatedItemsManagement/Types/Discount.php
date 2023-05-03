<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Enums\DiscountTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $discountAmount
 * @property DiscountTypeEnum $discountType
 * @property float $discountPercent
 */
class Discount extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'discountAmount'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountAmount',
            ],
            'discountType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountType',
            ],
            'discountPercent' => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'discountPercent',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
