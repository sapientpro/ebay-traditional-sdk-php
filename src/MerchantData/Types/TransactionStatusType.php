<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CancelStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CheckoutStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CompleteStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\DigitalStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\InquiryStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentHoldStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\ReturnStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentStatusCodeType $eBayPaymentStatus
 * @property CheckoutStatusCodeType $CheckoutStatus
 * @property DateTime $LastTimeModified
 * @property BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property CompleteStatusCodeType $CompleteStatus
 * @property bool $BuyerSelectedShipping
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property bool $IntegratedMerchantCreditCardEnabled
 * @property InquiryStatusCodeType $InquiryStatus
 * @property ReturnStatusCodeType $ReturnStatus
 * @property BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property DigitalStatusCodeType $DigitalStatus
 * @property CancelStatusCodeType $CancelStatus
 */
class TransactionStatusType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'eBayPaymentStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPaymentStatus',
            ],
            'CheckoutStatus'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutStatus',
            ],
            'LastTimeModified'                    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastTimeModified',
            ],
            'PaymentMethodUsed'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethodUsed',
            ],
            'CompleteStatus'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CompleteStatus',
            ],
            'BuyerSelectedShipping'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerSelectedShipping',
            ],
            'PaymentHoldStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldStatus',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
            ],
            'InquiryStatus'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InquiryStatus',
            ],
            'ReturnStatus'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnStatus',
            ],
            'PaymentInstrument'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentInstrument',
            ],
            'DigitalStatus'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DigitalStatus',
            ],
            'CancelStatus'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CancelStatus',
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
