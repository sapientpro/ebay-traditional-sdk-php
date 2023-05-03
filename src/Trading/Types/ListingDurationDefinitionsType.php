<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ListingDurationDefinitionType[] $ListingDuration
 * @property int $Version
 */
class ListingDurationDefinitionsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ListingDuration' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ListingDurationDefinitionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ListingDuration',
            ],
            'Version'         => [
                'type'          => 'integer',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'Version',
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
