<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;

use function array_key_exists;

/**
 * @property string $AccountID
 * @property AccountSummaryType $AccountSummary
 * @property CurrencyCodeType $Currency
 * @property AccountEntriesType $AccountEntries
 * @property PaginationResultType $PaginationResult
 * @property bool $HasMoreEntries
 * @property int $EntriesPerPage
 * @property int $PageNumber
 */
class GetAccountResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AccountID'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountID',
            ],
            'AccountSummary'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AccountSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountSummary',
            ],
            'Currency'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Currency',
            ],
            'AccountEntries'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AccountEntriesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountEntries',
            ],
            'PaginationResult' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'HasMoreEntries'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasMoreEntries',
            ],
            'EntriesPerPage'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EntriesPerPage',
            ],
            'PageNumber'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
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
