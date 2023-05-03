<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Account\Enums\RefundMethodEnum;
use SapientPro\EbayTraditionalSDK\Account\Enums\ReturnMethodEnum;
use SapientPro\EbayTraditionalSDK\Account\Enums\ReturnShippingCostPayerEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CategoryType[] $categoryTypes
 * @property string $description
 * @property bool $extendedHolidayReturnsOffered
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property ReturnMethodEnum $returnMethod
 * @property TimeDuration $returnPeriod
 * @property bool $returnsAccepted
 * @property ReturnShippingCostPayerEnum $returnShippingCostPayer
 */
class ReturnPolicyRequest extends BaseType
{
    private static $propertyTypes
        = [
            'categoryTypes'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\CategoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryTypes',
            ],
            'description'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'extendedHolidayReturnsOffered' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'extendedHolidayReturnsOffered',
            ],
            'marketplaceId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'name'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'name',
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
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TimeDuration',
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
