<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ModifyActionCodeType;

use function array_key_exists;

/**
 * @property ModifyActionCodeType $Action
 * @property PromotionalSaleType $PromotionalSaleDetails
 */
class SetPromotionalSaleRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Action'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Action',
            ],
            'PromotionalSaleDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PromotionalSaleType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PromotionalSaleDetails',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetPromotionalSaleRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
