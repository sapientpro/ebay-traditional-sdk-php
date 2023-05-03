<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CheckoutStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CommentTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentHoldStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerPaidStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerShippedStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CheckoutStatusCodeType $CheckoutStatus
 * @property SellingManagerPaidStatusCodeType $PaidStatus
 * @property SellingManagerShippedStatusCodeType $ShippedStatus
 * @property PaymentStatusCodeType $eBayPaymentStatus
 * @property string $PayPalTransactionID
 * @property BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property CommentTypeCodeType $FeedbackReceived
 * @property bool $FeedbackSent
 * @property int $TotalEmailsSent
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property string $SellerInvoiceNumber
 * @property DateTime $ShippedTime
 * @property DateTime $PaidTime
 * @property DateTime $LastEmailSentTime
 * @property DateTime $SellerInvoiceTime
 * @property bool $IntegratedMerchantCreditCardEnabled
 */
class SellingManagerOrderStatusType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CheckoutStatus'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutStatus',
            ],
            'PaidStatus'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaidStatus',
            ],
            'ShippedStatus'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedStatus',
            ],
            'eBayPaymentStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPaymentStatus',
            ],
            'PayPalTransactionID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalTransactionID',
            ],
            'PaymentMethodUsed'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethodUsed',
            ],
            'FeedbackReceived'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackReceived',
            ],
            'FeedbackSent'                        => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackSent',
            ],
            'TotalEmailsSent'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalEmailsSent',
            ],
            'PaymentHoldStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldStatus',
            ],
            'SellerInvoiceNumber'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerInvoiceNumber',
            ],
            'ShippedTime'                         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippedTime',
            ],
            'PaidTime'                            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaidTime',
            ],
            'LastEmailSentTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastEmailSentTime',
            ],
            'SellerInvoiceTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerInvoiceTime',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
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
