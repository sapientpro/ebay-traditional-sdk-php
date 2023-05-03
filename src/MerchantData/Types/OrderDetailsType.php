<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentHoldStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $OrderID
 * @property string $BuyerUserID
 * @property string $BuyerFirstName
 * @property string $BuyerLastName
 * @property string $BuyerEmail
 * @property string $BuyerPhone
 * @property string $ShipRecipientName
 * @property string $ShipStreet1
 * @property string $ShipStreet2
 * @property string $ShipCityName
 * @property string $ShipStateOrProvince
 * @property string $ShipPostalCode
 * @property string $ShipCountryName
 * @property string $ShippingService
 * @property DateTime $PaymentClearedTime
 * @property int $CheckoutSiteID
 * @property DateTime $OrderCreationTime
 * @property AmountType $OrderSalePrice
 * @property AmountType $TaxAmount
 * @property AmountType $InsuranceCost
 * @property AmountType $ShippingCost
 * @property AmountType $OrderTotalCost
 * @property int $SellingManagerSaleRecordID
 * @property OrderItemDetailsType $OrderItemDetails
 * @property string $BuyerStaticAlias
 * @property string $ShippingServiceToken
 * @property CheckoutStatusType $CheckoutStatus
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property ExternalTransactionType[] $ExternalTransaction
 * @property string $ShipReferenceId
 * @property PickupDetailsType $PickupDetails
 * @property PickupMethodSelectedType $PickupMethodSelected
 */
class OrderDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'OrderID'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderID',
            ],
            'BuyerUserID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerUserID',
            ],
            'BuyerFirstName'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerFirstName',
            ],
            'BuyerLastName'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerLastName',
            ],
            'BuyerEmail'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerEmail',
            ],
            'BuyerPhone'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerPhone',
            ],
            'ShipRecipientName'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipRecipientName',
            ],
            'ShipStreet1'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipStreet1',
            ],
            'ShipStreet2'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipStreet2',
            ],
            'ShipCityName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipCityName',
            ],
            'ShipStateOrProvince'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipStateOrProvince',
            ],
            'ShipPostalCode'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipPostalCode',
            ],
            'ShipCountryName'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipCountryName',
            ],
            'ShippingService'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingService',
            ],
            'PaymentClearedTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentClearedTime',
            ],
            'CheckoutSiteID'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutSiteID',
            ],
            'OrderCreationTime'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderCreationTime',
            ],
            'OrderSalePrice'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderSalePrice',
            ],
            'TaxAmount'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TaxAmount',
            ],
            'InsuranceCost'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InsuranceCost',
            ],
            'ShippingCost'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCost',
            ],
            'OrderTotalCost'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderTotalCost',
            ],
            'SellingManagerSaleRecordID' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerSaleRecordID',
            ],
            'OrderItemDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderItemDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderItemDetails',
            ],
            'BuyerStaticAlias'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerStaticAlias',
            ],
            'ShippingServiceToken'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceToken',
            ],
            'CheckoutStatus'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CheckoutStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutStatus',
            ],
            'PaymentHoldStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldStatus',
            ],
            'ExternalTransaction'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ExternalTransactionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalTransaction',
            ],
            'ShipReferenceId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipReferenceId',
            ],
            'PickupDetails'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupDetails',
            ],
            'PickupMethodSelected'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\PickupMethodSelectedType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PickupMethodSelected',
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
