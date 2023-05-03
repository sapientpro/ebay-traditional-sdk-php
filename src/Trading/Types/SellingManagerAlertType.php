<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAlertTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SellingManagerAlertTypeCodeType $AlertType
 * @property SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
 * @property SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
 * @property SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
 * @property SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
 * @property SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
 * @property int $DurationInDays
 * @property int $Count
 */
class SellingManagerAlertType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AlertType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AlertType',
            ],
            'SoldAlert'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldAlert',
            ],
            'InventoryAlert'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InventoryAlert',
            ],
            'AutomationAlert' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutomationAlert',
            ],
            'PaisaPayAlert'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayAlert',
            ],
            'GeneralAlert'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GeneralAlert',
            ],
            'DurationInDays'  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DurationInDays',
            ],
            'Count'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Count',
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
