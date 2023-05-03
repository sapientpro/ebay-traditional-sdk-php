<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CategoryType[] $categoryTypes
 * @property Deposit $deposit
 * @property string $description
 * @property TimeDuration $fullPaymentDueIn
 * @property bool $immediatePay
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property string $paymentInstructions
 * @property PaymentMethod[] $paymentMethods
 * @property string $paymentPolicyId
 */
class PaymentPolicy extends BaseType
{
    private static array $propertyTypes = [
            'categoryTypes'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\CategoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryTypes',
            ],
            'deposit'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\Deposit',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deposit',
            ],
            'description'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'description',
            ],
            'fullPaymentDueIn'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TimeDuration',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fullPaymentDueIn',
            ],
            'immediatePay'        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'immediatePay',
            ],
            'marketplaceId'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'name'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'name',
            ],
            'paymentInstructions' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentInstructions',
            ],
            'paymentMethods'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\PaymentMethod',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'paymentMethods',
            ],
            'paymentPolicyId'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentPolicyId',
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
