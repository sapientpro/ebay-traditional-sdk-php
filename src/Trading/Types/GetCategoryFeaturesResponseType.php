<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property string $CategoryVersion
 * @property DateTime $UpdateTime
 * @property CategoryFeatureType[] $Category
 * @property SiteDefaultsType $SiteDefaults
 * @property FeatureDefinitionsType $FeatureDefinitions
 */
class GetCategoryFeaturesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CategoryVersion'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryVersion',
            ],
            'UpdateTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
            ],
            'Category'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryFeatureType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Category',
            ],
            'SiteDefaults'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SiteDefaultsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SiteDefaults',
            ],
            'FeatureDefinitions' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeatureDefinitionsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeatureDefinitions',
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
