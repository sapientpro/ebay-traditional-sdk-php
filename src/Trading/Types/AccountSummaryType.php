<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AccountStateCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AccountStateCodeType $AccountState
 * @property AmountType $InvoicePayment
 * @property AmountType $InvoiceCredit
 * @property AmountType $InvoiceNewFee
 * @property AdditionalAccountType[] $AdditionalAccount
 * @property AmountType $AmountPastDue
 * @property string $BankAccountInfo
 * @property DateTime $BankModifyDate
 * @property int $BillingCycleDate
 * @property DateTime $CreditCardExpiration
 * @property string $CreditCardInfo
 * @property DateTime $CreditCardModifyDate
 * @property AmountType $CurrentBalance
 * @property string $Email
 * @property AmountType $InvoiceBalance
 * @property DateTime $InvoiceDate
 * @property AmountType $LastAmountPaid
 * @property DateTime $LastPaymentDate
 * @property bool $PastDue
 * @property SellerPaymentMethodCodeType $PaymentMethod
 */
class AccountSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AccountState'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountState',
            ],
            'InvoicePayment'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoicePayment',
            ],
            'InvoiceCredit'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceCredit',
            ],
            'InvoiceNewFee'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceNewFee',
            ],
            'AdditionalAccount'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AdditionalAccountType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AdditionalAccount',
            ],
            'AmountPastDue'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AmountPastDue',
            ],
            'BankAccountInfo'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BankAccountInfo',
            ],
            'BankModifyDate'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BankModifyDate',
            ],
            'BillingCycleDate'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BillingCycleDate',
            ],
            'CreditCardExpiration' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreditCardExpiration',
            ],
            'CreditCardInfo'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreditCardInfo',
            ],
            'CreditCardModifyDate' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreditCardModifyDate',
            ],
            'CurrentBalance'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CurrentBalance',
            ],
            'Email'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Email',
            ],
            'InvoiceBalance'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceBalance',
            ],
            'InvoiceDate'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceDate',
            ],
            'LastAmountPaid'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastAmountPaid',
            ],
            'LastPaymentDate'      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastPaymentDate',
            ],
            'PastDue'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PastDue',
            ],
            'PaymentMethod'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
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
