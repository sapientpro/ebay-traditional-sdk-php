<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use function array_key_exists;

/**
 * @property SearchResult $searchResult
 * @property PaginationOutput $paginationOutput
 * @property string $itemSearchURL
 */
class BaseFindingServiceResponse extends BaseServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'searchResult'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\SearchResult',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'searchResult',
            ],
            'paginationOutput' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\PaginationOutput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationOutput',
            ],
            'itemSearchURL'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemSearchURL',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
