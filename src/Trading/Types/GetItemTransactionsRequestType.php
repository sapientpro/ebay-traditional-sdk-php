<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\TransactionPlatformCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property DateTime $ModTimeFrom
 * @property DateTime $ModTimeTo
 * @property string $TransactionID
 * @property PaginationType $Pagination
 * @property bool $IncludeFinalValueFee
 * @property bool $IncludeContainingOrder
 * @property TransactionPlatformCodeType $Platform
 * @property int $NumberOfDays
 * @property bool $IncludeVariations
 * @property string $OrderLineItemID
 */
class GetItemTransactionsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'ModTimeFrom'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeFrom',
            ],
            'ModTimeTo'              => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeTo',
            ],
            'TransactionID'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'Pagination'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'IncludeFinalValueFee'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeFinalValueFee',
            ],
            'IncludeContainingOrder' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeContainingOrder',
            ],
            'Platform'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Platform',
            ],
            'NumberOfDays'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NumberOfDays',
            ],
            'IncludeVariations'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeVariations',
            ],
            'OrderLineItemID'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetItemTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
