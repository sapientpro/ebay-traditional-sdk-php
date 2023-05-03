<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Types;

use SapientPro\EbayTraditionalSDK\HalfFinding\Enums\HalfItemConditionCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $itemID
 * @property string $itemURL
 * @property int $quantity
 * @property UserType $seller
 * @property Amount $price
 * @property RentalAmount[] $rentalPrice
 * @property ShippingServiceOptionsType[] $shippingService
 * @property string $itemLocation
 * @property string $excludedShippingAreas
 * @property HalfItemConditionCodeType $condition
 * @property string $comments
 * @property string $description
 * @property StorefrontType $storefront
 */
class ItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemID',
            ],
            'itemURL'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemURL',
            ],
            'quantity'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'quantity',
            ],
            'seller'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'seller',
            ],
            'price'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'price',
            ],
            'rentalPrice'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\RentalAmount',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'rentalPrice',
            ],
            'shippingService'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ShippingServiceOptionsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'shippingService',
            ],
            'itemLocation'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemLocation',
            ],
            'excludedShippingAreas' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'excludedShippingAreas',
            ],
            'condition'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'condition',
            ],
            'comments'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'comments',
            ],
            'description'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'storefront'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\StorefrontType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'storefront',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
