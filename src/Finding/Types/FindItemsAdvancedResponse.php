<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use function array_key_exists;

/**
 * @property CategoryHistogramContainer $categoryHistogramContainer
 * @property AspectHistogramContainer $aspectHistogramContainer
 * @property ConditionHistogramContainer $conditionHistogramContainer
 */
class FindItemsAdvancedResponse extends BaseFindingServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'categoryHistogramContainer'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\CategoryHistogramContainer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryHistogramContainer',
            ],
            'aspectHistogramContainer'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\AspectHistogramContainer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'aspectHistogramContainer',
            ],
            'conditionHistogramContainer' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\ConditionHistogramContainer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'conditionHistogramContainer',
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
