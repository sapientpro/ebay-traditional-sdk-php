<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property MyMessagesMessageIDArrayType $MessageIDs
 * @property int $FolderID
 * @property DateTime $StartTime
 * @property DateTime $EndTime
 * @property MyMessagesExternalMessageIDArrayType $ExternalMessageIDs
 * @property PaginationType $Pagination
 * @property bool $IncludeHighPriorityMessageOnly
 */
class GetMyMessagesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'MessageIDs'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyMessagesMessageIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageIDs',
            ],
            'FolderID'                       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FolderID',
            ],
            'StartTime'                      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'EndTime'                        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'ExternalMessageIDs'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyMessagesExternalMessageIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalMessageIDs',
            ],
            'Pagination'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'IncludeHighPriorityMessageOnly' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeHighPriorityMessageOnly',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyMessagesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
