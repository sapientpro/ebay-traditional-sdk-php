<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\ProductSortCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\SortOrderCodeType;

use function array_key_exists;

/**
 * @property string $IncludeSelector
 * @property bool $AvailableItemsOnly
 * @property string[] $DomainName
 * @property ProductIDType $ProductID
 * @property string $QueryKeywords
 * @property ProductSortCodeType $ProductSort
 * @property SortOrderCodeType $SortOrder
 * @property int $MaxEntries
 * @property int $PageNumber
 * @property string $CategoryID
 * @property bool $HideDuplicateItems
 */
class FindProductsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'IncludeSelector'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeSelector',
            ],
            'AvailableItemsOnly' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AvailableItemsOnly',
            ],
            'DomainName'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DomainName',
            ],
            'ProductID'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ProductIDType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductID',
            ],
            'QueryKeywords'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QueryKeywords',
            ],
            'ProductSort'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductSort',
            ],
            'SortOrder'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SortOrder',
            ],
            'MaxEntries'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxEntries',
            ],
            'PageNumber'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'CategoryID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'HideDuplicateItems' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HideDuplicateItems',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'FindProductsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
