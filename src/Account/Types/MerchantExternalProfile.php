<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Enums\CurrencyCodeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ExternalPaymentMethod $acceptedPaymentMethods
 * @property string $accountCreationDate
 * @property ExternalPaymentMethod $billingPaymentMethods
 * @property InventorySizing $inventorySizing
 * @property string $merchantCategoryCode
 * @property CurrencyCodeEnum $primaryCurrency
 * @property ReturnSnapshot $returnSnapshots
 * @property string $sicCode
 * @property TransactionVolume $transactionVolume
 */
class MerchantExternalProfile extends BaseType
{
    private static array $propertyTypes = [
            'acceptedPaymentMethods' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ExternalPaymentMethod',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'acceptedPaymentMethods',
            ],
            'accountCreationDate'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'accountCreationDate',
            ],
            'billingPaymentMethods'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ExternalPaymentMethod',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'billingPaymentMethods',
            ],
            'inventorySizing'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\InventorySizing',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventorySizing',
            ],
            'merchantCategoryCode'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'merchantCategoryCode',
            ],
            'primaryCurrency'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryCurrency',
            ],
            'returnSnapshots'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ReturnSnapshot',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnSnapshots',
            ],
            'sicCode'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sicCode',
            ],
            'transactionVolume'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TransactionVolume',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'transactionVolume',
            ],
    ];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
