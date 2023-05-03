<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use function array_key_exists;

/**
 * @property ShippingDetailsType $ShippingDetails
 * @property ShippingCostSummaryType $ShippingCostSummary
 * @property PickUpInStoreDetailsType $PickUpInStoreDetails
 */
class GetShippingCostsResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShippingDetails'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ShippingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingDetails',
            ],
            'ShippingCostSummary'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ShippingCostSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCostSummary',
            ],
            'PickUpInStoreDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\PickUpInStoreDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickUpInStoreDetails',
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
