<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\DisplayPayNowButtonCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\FedExRateOptionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\UPSRateOptionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\USPSRateOptionCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $AlwaysUseThisPaymentAddress
 * @property DisplayPayNowButtonCodeType $DisplayPayNowButton
 * @property bool $PayPalPreferred
 * @property string $DefaultPayPalEmailAddress
 * @property bool $PayPalAlwaysOn
 * @property AddressType $SellerPaymentAddress
 * @property UPSRateOptionCodeType $UPSRateOption
 * @property FedExRateOptionCodeType $FedExRateOption
 * @property USPSRateOptionCodeType $USPSRateOption
 */
class SellerPaymentPreferencesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AlwaysUseThisPaymentAddress' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AlwaysUseThisPaymentAddress',
            ],
            'DisplayPayNowButton'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisplayPayNowButton',
            ],
            'PayPalPreferred'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalPreferred',
            ],
            'DefaultPayPalEmailAddress'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DefaultPayPalEmailAddress',
            ],
            'PayPalAlwaysOn'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalAlwaysOn',
            ],
            'SellerPaymentAddress'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaymentAddress',
            ],
            'UPSRateOption'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UPSRateOption',
            ],
            'FedExRateOption'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FedExRateOption',
            ],
            'USPSRateOption'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'USPSRateOption',
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
