<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Finding\Enums\OutputSelectorType;

use function array_key_exists;

/**
 * @property ProductId $productId
 * @property ItemFilter[] $itemFilter
 * @property OutputSelectorType[] $outputSelector
 */
class FindItemsByProductRequest extends BaseFindingServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'productId'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ProductId',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'productId',
            ],
            'itemFilter'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ItemFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemFilter',
            ],
            'outputSelector' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'outputSelector',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsByProductRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
