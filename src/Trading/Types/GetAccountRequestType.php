<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AccountEntrySortTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AccountHistorySelectionCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CurrencyCodeType;

use function array_key_exists;

/**
 * @property AccountHistorySelectionCodeType $AccountHistorySelection
 * @property DateTime $InvoiceDate
 * @property DateTime $BeginDate
 * @property DateTime $EndDate
 * @property PaginationType $Pagination
 * @property bool $ExcludeBalance
 * @property bool $ExcludeSummary
 * @property bool $IncludeConversionRate
 * @property AccountEntrySortTypeCodeType $AccountEntrySortType
 * @property CurrencyCodeType $Currency
 * @property string $ItemID
 */
class GetAccountRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AccountHistorySelection' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountHistorySelection',
            ],
            'InvoiceDate'             => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvoiceDate',
            ],
            'BeginDate'               => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BeginDate',
            ],
            'EndDate'                 => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndDate',
            ],
            'Pagination'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'ExcludeBalance'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExcludeBalance',
            ],
            'ExcludeSummary'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExcludeSummary',
            ],
            'IncludeConversionRate'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeConversionRate',
            ],
            'AccountEntrySortType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AccountEntrySortType',
            ],
            'Currency'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Currency',
            ],
            'ItemID'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetAccountRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
