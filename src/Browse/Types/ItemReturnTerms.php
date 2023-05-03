<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Enums\RefundMethodEnum;
use SapientPro\EbayTraditionalSDK\Browse\Enums\ReturnMethodEnum;
use SapientPro\EbayTraditionalSDK\Browse\Enums\ReturnShippingCostPayerEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $extendedHolidayReturnsOffered
 * @property RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property ReturnMethodEnum $returnMethod
 * @property TimeDuration $returnPeriod
 * @property bool $returnsAccepted
 * @property ReturnShippingCostPayerEnum $returnShippingCostPayer
 */
class ItemReturnTerms extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'extendedHolidayReturnsOffered' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'extendedHolidayReturnsOffered',
            ],
            'refundMethod'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundMethod',
            ],
            'restockingFeePercentage'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'restockingFeePercentage',
            ],
            'returnInstructions'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnInstructions',
            ],
            'returnMethod'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnMethod',
            ],
            'returnPeriod'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\TimeDuration',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPeriod',
            ],
            'returnsAccepted'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnsAccepted',
            ],
            'returnShippingCostPayer'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnShippingCostPayer',
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
