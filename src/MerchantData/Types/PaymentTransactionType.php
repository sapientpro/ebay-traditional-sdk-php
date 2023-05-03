<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentTransactionStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentTransactionStatusCodeType $PaymentStatus
 * @property UserIdentityType $Payer
 * @property UserIdentityType $Payee
 * @property DateTime $PaymentTime
 * @property AmountType $PaymentAmount
 * @property TransactionReferenceType $ReferenceID
 * @property AmountType $FeeOrCreditAmount
 * @property TransactionReferenceType[] $PaymentReferenceID
 */
class PaymentTransactionType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaymentStatus'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentStatus',
            ],
            'Payer'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UserIdentityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Payer',
            ],
            'Payee'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UserIdentityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Payee',
            ],
            'PaymentTime'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentTime',
            ],
            'PaymentAmount'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentAmount',
            ],
            'ReferenceID'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionReferenceType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReferenceID',
            ],
            'FeeOrCreditAmount'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeOrCreditAmount',
            ],
            'PaymentReferenceID' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionReferenceType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentReferenceID',
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
