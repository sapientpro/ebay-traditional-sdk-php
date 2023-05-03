<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property DescriptionTemplateType[] $DescriptionTemplate
 * @property int $LayoutTotal
 * @property int[] $ObsoleteLayoutID
 * @property int[] $ObsoleteThemeID
 * @property ThemeGroupType[] $ThemeGroup
 * @property int $ThemeTotal
 */
class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DescriptionTemplate' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DescriptionTemplateType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DescriptionTemplate',
            ],
            'LayoutTotal'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LayoutTotal',
            ],
            'ObsoleteLayoutID'    => [
                'type'        => 'integer',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ObsoleteLayoutID',
            ],
            'ObsoleteThemeID'     => [
                'type'        => 'integer',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ObsoleteThemeID',
            ],
            'ThemeGroup'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ThemeGroupType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ThemeGroup',
            ],
            'ThemeTotal'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ThemeTotal',
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
