<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\BuyerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\InsuranceOptionCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
 * @property ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property SalesTaxType $SalesTax
 * @property InsuranceOptionCodeType $InsuranceOption
 * @property AmountType $InsuranceFee
 * @property BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property string $CheckoutInstructions
 * @property bool $EmailCopyToSeller
 * @property AmountType $CODCost
 * @property string $SKU
 * @property string $OrderLineItemID
 * @property AmountType $AdjustmentAmount
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'TransactionID'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'OrderID'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderID',
            ],
            'InternationalShippingServiceOptions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\InternationalShippingServiceOptionsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'InternationalShippingServiceOptions',
            ],
            'ShippingServiceOptions'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingServiceOptionsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingServiceOptions',
            ],
            'SalesTax'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SalesTaxType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SalesTax',
            ],
            'InsuranceOption'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceOption',
            ],
            'InsuranceFee'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceFee',
            ],
            'PaymentMethods'                      => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PaymentMethods',
            ],
            'PayPalEmailAddress'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalEmailAddress',
            ],
            'CheckoutInstructions'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutInstructions',
            ],
            'EmailCopyToSeller'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EmailCopyToSeller',
            ],
            'CODCost'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CODCost',
            ],
            'SKU'                                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKU',
            ],
            'OrderLineItemID'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
            ],
            'AdjustmentAmount'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdjustmentAmount',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SendInvoiceRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
