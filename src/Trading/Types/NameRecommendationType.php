<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Name
 * @property RecommendationValidationRulesType $ValidationRules
 * @property ValueRecommendationType[] $ValueRecommendation
 * @property string $HelpURL
 * @property string $HelpText
 */
class NameRecommendationType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Name'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'ValidationRules'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RecommendationValidationRulesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValidationRules',
            ],
            'ValueRecommendation' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ValueRecommendationType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ValueRecommendation',
            ],
            'HelpURL'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HelpURL',
            ],
            'HelpText'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HelpText',
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
