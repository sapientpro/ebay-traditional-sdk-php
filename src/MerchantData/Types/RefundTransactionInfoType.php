<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentTransactionStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\RefundSourceTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentTransactionStatusCodeType $RefundStatus
 * @property RefundSourceTypeCodeType $RefundType
 * @property UserIdentityType $RefundTo
 * @property DateTime $RefundTime
 * @property AmountType $RefundAmount
 * @property TransactionReferenceType $ReferenceID
 * @property AmountType $FeeOrCreditAmount
 */
class RefundTransactionInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'RefundStatus'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundStatus',
            ],
            'RefundType'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundType',
            ],
            'RefundTo'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UserIdentityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundTo',
            ],
            'RefundTime'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundTime',
            ],
            'RefundAmount'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RefundAmount',
            ],
            'ReferenceID'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TransactionReferenceType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReferenceID',
            ],
            'FeeOrCreditAmount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeOrCreditAmount',
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
