<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property string[] $CategoryID
 * @property DateTime $LastUpdateTime
 * @property int $MaxNames
 * @property int $MaxValuesPerName
 * @property string $Name
 * @property CategoryItemSpecificsType[] $CategorySpecific
 * @property bool $ExcludeRelationships
 * @property bool $IncludeConfidence
 * @property bool $CategorySpecificsFileInfo
 */
class GetCategorySpecificsRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CategoryID'                => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'LastUpdateTime'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastUpdateTime',
            ],
            'MaxNames'                  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxNames',
            ],
            'MaxValuesPerName'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxValuesPerName',
            ],
            'Name'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'CategorySpecific'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\CategoryItemSpecificsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CategorySpecific',
            ],
            'ExcludeRelationships'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExcludeRelationships',
            ],
            'IncludeConfidence'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeConfidence',
            ],
            'CategorySpecificsFileInfo' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategorySpecificsFileInfo',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetCategorySpecificsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
