<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CompleteStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property PaymentStatusCodeType $eBayPaymentStatus
 * @property DateTime $LastModifiedTime
 * @property BuyerPaymentMethodCodeType $PaymentMethod
 * @property CompleteStatusCodeType $Status
 * @property bool $IntegratedMerchantCreditCardEnabled
 * @property EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
 * @property BuyerPaymentInstrumentCodeType $PaymentInstrument
 */
class CheckoutStatusType extends BaseType
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
            'LastModifiedTime'                    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastModifiedTime',
            ],
            'PaymentMethod'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
            ],
            'Status'                              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'IntegratedMerchantCreditCardEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardEnabled',
            ],
            'eBayPaymentMismatchDetails'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\EBayPaymentMismatchDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayPaymentMismatchDetails',
            ],
            'PaymentInstrument'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentInstrument',
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
