<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Merchandising\Types;

use function array_key_exists;

/**
 * @property string $itemId
 * @property string $categoryId
 * @property ItemFilter[] $itemFilter
 */
class GetRelatedCategoryItemsRequest extends BaseMerchandisingServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemId'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'categoryId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'itemFilter' => [
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
            self::$requestXmlRootElementNames[__CLASS__] = 'getRelatedCategoryItemsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
