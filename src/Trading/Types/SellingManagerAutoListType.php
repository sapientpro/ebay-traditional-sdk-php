<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $SourceSaleTemplateID
 * @property SellingManagerAutoListMinActiveItemsType $KeepMinActive
 * @property SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
 */
class SellingManagerAutoListType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SourceSaleTemplateID'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SourceSaleTemplateID',
            ],
            'KeepMinActive'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerAutoListMinActiveItemsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'KeepMinActive',
            ],
            'ListAccordingToSchedule' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerAutoListAccordingToScheduleType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListAccordingToSchedule',
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
