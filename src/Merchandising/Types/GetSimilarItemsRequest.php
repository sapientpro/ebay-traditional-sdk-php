<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Merchandising\Types;

use DateTime;

use function array_key_exists;

/**
 * @property string $itemId
 * @property string[] $categoryId
 * @property string[] $categoryIdExclude
 * @property string $listingType
 * @property DateTime $endTimeTo
 * @property DateTime $endTimeFrom
 * @property Amount $maxPrice
 * @property ItemFilter[] $itemFilter
 */
class GetSimilarItemsRequest extends BaseMerchandisingServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'categoryId'        => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'categoryIdExclude' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'categoryIdExclude',
            ],
            'listingType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingType',
            ],
            'endTimeTo'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endTimeTo',
            ],
            'endTimeFrom'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endTimeFrom',
            ],
            'maxPrice'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxPrice',
            ],
            'itemFilter'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Merchandising\Types\ItemFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemFilter',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getSimilarItemsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
