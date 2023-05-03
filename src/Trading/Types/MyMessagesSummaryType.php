<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MyMessagesFolderSummaryType[] $FolderSummary
 * @property int $NewMessageCount
 * @property int $FlaggedMessageCount
 * @property int $TotalMessageCount
 * @property int $NewHighPriorityCount
 * @property int $TotalHighPriorityCount
 */
class MyMessagesSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'FolderSummary'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyMessagesFolderSummaryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'FolderSummary',
            ],
            'NewMessageCount'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NewMessageCount',
            ],
            'FlaggedMessageCount'    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FlaggedMessageCount',
            ],
            'TotalMessageCount'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalMessageCount',
            ],
            'NewHighPriorityCount'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NewHighPriorityCount',
            ],
            'TotalHighPriorityCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TotalHighPriorityCount',
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
