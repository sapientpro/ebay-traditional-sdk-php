<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\ProductStateCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $DomainName
 * @property string $DetailsURL
 * @property bool $DisplayStockPhotos
 * @property ProductIDType[] $ProductID
 * @property int $ItemCount
 * @property NameValueListArrayType $ItemSpecifics
 * @property int $ReviewCount
 * @property string $StockPhotoURL
 * @property string $Title
 * @property ProductStateCodeType $ProductState
 */
class CatalogProductType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DomainName'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DomainName',
            ],
            'DetailsURL'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailsURL',
            ],
            'DisplayStockPhotos' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisplayStockPhotos',
            ],
            'ProductID'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\ProductIDType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ProductID',
            ],
            'ItemCount'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemCount',
            ],
            'ItemSpecifics'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemSpecifics',
            ],
            'ReviewCount'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReviewCount',
            ],
            'StockPhotoURL'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StockPhotoURL',
            ],
            'Title'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Title',
            ],
            'ProductState'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductState',
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
