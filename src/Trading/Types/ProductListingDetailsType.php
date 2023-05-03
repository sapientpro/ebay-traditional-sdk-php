<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $IncludeStockPhotoURL
 * @property bool $UseStockPhotoURLAsGallery
 * @property string $StockPhotoURL
 * @property string[] $Copyright
 * @property string $ProductReferenceID
 * @property bool $ReturnSearchResultOnDuplicates
 * @property string $ISBN
 * @property string $UPC
 * @property string $EAN
 * @property BrandMPNType $BrandMPN
 * @property TicketListingDetailsType $TicketListingDetails
 * @property bool $UseFirstProduct
 * @property bool $IncludeeBayProductDetails
 */
class ProductListingDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'IncludeStockPhotoURL'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeStockPhotoURL',
            ],
            'UseStockPhotoURLAsGallery'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UseStockPhotoURLAsGallery',
            ],
            'StockPhotoURL'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StockPhotoURL',
            ],
            'Copyright'                      => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Copyright',
            ],
            'ProductReferenceID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductReferenceID',
            ],
            'ReturnSearchResultOnDuplicates' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnSearchResultOnDuplicates',
            ],
            'ISBN'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ISBN',
            ],
            'UPC'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UPC',
            ],
            'EAN'                            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EAN',
            ],
            'BrandMPN'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BrandMPNType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BrandMPN',
            ],
            'TicketListingDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\TicketListingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TicketListingDetails',
            ],
            'UseFirstProduct'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UseFirstProduct',
            ],
            'IncludeeBayProductDetails'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeeBayProductDetails',
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
