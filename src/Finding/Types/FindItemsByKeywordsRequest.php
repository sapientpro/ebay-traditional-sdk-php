<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Finding\Enums\OutputSelectorType;

use function array_key_exists;

/**
 * @property string $keywords
 * @property ItemFilter[] $itemFilter
 * @property AspectFilter[] $aspectFilter
 * @property OutputSelectorType[] $outputSelector
 */
class FindItemsByKeywordsRequest extends BaseFindingServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'keywords'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'keywords',
            ],
            'itemFilter'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ItemFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemFilter',
            ],
            'aspectFilter'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\AspectFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'aspectFilter',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsByKeywordsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
