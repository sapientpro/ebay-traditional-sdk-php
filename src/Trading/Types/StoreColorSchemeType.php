<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $ColorSchemeID
 * @property string $Name
 * @property StoreColorType $Color
 * @property StoreFontType $Font
 */
class StoreColorSchemeType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ColorSchemeID' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ColorSchemeID',
            ],
            'Name'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'Color'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreColorType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Color',
            ],
            'Font'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\StoreFontType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Font',
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
