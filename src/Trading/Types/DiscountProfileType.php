<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $DiscountProfileID
 * @property string $DiscountProfileName
 * @property AmountType $EachAdditionalAmount
 * @property AmountType $EachAdditionalAmountOff
 * @property float $EachAdditionalPercentOff
 * @property MeasureType $WeightOff
 * @property string $MappedDiscountProfileID
 */
class DiscountProfileType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DiscountProfileID'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountProfileID',
            ],
            'DiscountProfileName'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DiscountProfileName',
            ],
            'EachAdditionalAmount'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EachAdditionalAmount',
            ],
            'EachAdditionalAmountOff'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EachAdditionalAmountOff',
            ],
            'EachAdditionalPercentOff' => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EachAdditionalPercentOff',
            ],
            'WeightOff'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightOff',
            ],
            'MappedDiscountProfileID'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MappedDiscountProfileID',
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
