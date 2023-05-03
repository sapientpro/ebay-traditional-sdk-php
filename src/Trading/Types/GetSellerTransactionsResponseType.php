<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property PaginationResultType $PaginationResult
 * @property bool $HasMoreTransactions
 * @property int $TransactionsPerPage
 * @property int $PageNumber
 * @property int $ReturnedTransactionCountActual
 * @property UserType $Seller
 * @property TransactionArrayType $TransactionArray
 * @property bool $PayPalPreferred
 */
class GetSellerTransactionsResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaginationResult'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'HasMoreTransactions'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasMoreTransactions',
            ],
            'TransactionsPerPage'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionsPerPage',
            ],
            'PageNumber'                     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'ReturnedTransactionCountActual' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnedTransactionCountActual',
            ],
            'Seller'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Seller',
            ],
            'TransactionArray'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TransactionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionArray',
            ],
            'PayPalPreferred'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalPreferred',
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
