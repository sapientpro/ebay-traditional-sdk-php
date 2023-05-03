<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\DepositTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $HoursToDeposit
 * @property int $DaysToFullPayment
 * @property AmountType $DepositAmount
 * @property DepositTypeCodeType $DepositType
 */
class PaymentDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'HoursToDeposit'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HoursToDeposit',
            ],
            'DaysToFullPayment' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DaysToFullPayment',
            ],
            'DepositAmount'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositAmount',
            ],
            'DepositType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DepositType',
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
