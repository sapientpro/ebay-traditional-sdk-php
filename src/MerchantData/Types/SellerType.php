<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\CurrencyCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\SellerBusinessCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\SellerLevelCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\SellerPaymentMethodCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $PaisaPayStatus
 * @property bool $AllowPaymentEdit
 * @property CurrencyCodeType $BillingCurrency
 * @property bool $CheckoutEnabled
 * @property bool $CIPBankAccountStored
 * @property bool $GoodStanding
 * @property bool $QualifiesForB2BVAT
 * @property SellerLevelCodeType $SellerLevel
 * @property AddressType $SellerPaymentAddress
 * @property SchedulingInfoType $SchedulingInfo
 * @property bool $StoreOwner
 * @property string $StoreURL
 * @property SellerBusinessCodeType $SellerBusinessType
 * @property bool $RegisteredBusinessSeller
 * @property SiteCodeType $StoreSite
 * @property SellerPaymentMethodCodeType $PaymentMethod
 * @property bool $CharityRegistered
 * @property bool $SafePaymentExempt
 * @property int $PaisaPayEscrowEMIStatus
 * @property CharityAffiliationDetailsType $CharityAffiliationDetails
 * @property float $TransactionPercent
 * @property IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
 * @property FeatureEligibilityType $FeatureEligibility
 * @property bool $TopRatedSeller
 * @property TopRatedSellerDetailsType $TopRatedSellerDetails
 * @property RecoupmentPolicyConsentType $RecoupmentPolicyConsent
 * @property bool $DomesticRateTable
 */
class SellerType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaisaPayStatus'                   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayStatus',
            ],
            'AllowPaymentEdit'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AllowPaymentEdit',
            ],
            'BillingCurrency'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BillingCurrency',
            ],
            'CheckoutEnabled'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CheckoutEnabled',
            ],
            'CIPBankAccountStored'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CIPBankAccountStored',
            ],
            'GoodStanding'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GoodStanding',
            ],
            'QualifiesForB2BVAT'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiesForB2BVAT',
            ],
            'SellerLevel'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerLevel',
            ],
            'SellerPaymentAddress'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerPaymentAddress',
            ],
            'SchedulingInfo'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SchedulingInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SchedulingInfo',
            ],
            'StoreOwner'                       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreOwner',
            ],
            'StoreURL'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreURL',
            ],
            'SellerBusinessType'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerBusinessType',
            ],
            'RegisteredBusinessSeller'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegisteredBusinessSeller',
            ],
            'StoreSite'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreSite',
            ],
            'PaymentMethod'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentMethod',
            ],
            'CharityRegistered'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CharityRegistered',
            ],
            'SafePaymentExempt'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SafePaymentExempt',
            ],
            'PaisaPayEscrowEMIStatus'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaisaPayEscrowEMIStatus',
            ],
            'CharityAffiliationDetails'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\CharityAffiliationDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CharityAffiliationDetails',
            ],
            'TransactionPercent'               => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionPercent',
            ],
            'IntegratedMerchantCreditCardInfo' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\IntegratedMerchantCreditCardInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IntegratedMerchantCreditCardInfo',
            ],
            'FeatureEligibility'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FeatureEligibilityType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeatureEligibility',
            ],
            'TopRatedSeller'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TopRatedSeller',
            ],
            'TopRatedSellerDetails'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\TopRatedSellerDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TopRatedSellerDetails',
            ],
            'RecoupmentPolicyConsent'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RecoupmentPolicyConsentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecoupmentPolicyConsent',
            ],
            'DomesticRateTable'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DomesticRateTable',
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
