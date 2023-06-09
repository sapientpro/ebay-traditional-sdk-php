<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ListingStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\MessageTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\QuestionTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Sender
 * @property string $RecipientUserID
 * @property string $SendToName
 * @property string $Subject
 * @property string $MessageID
 * @property string $ExternalMessageID
 * @property string $ContentType
 * @property string $Text
 * @property bool $Flagged
 * @property bool $Read
 * @property DateTime $CreationDate
 * @property DateTime $ReceiveDate
 * @property DateTime $ExpirationDate
 * @property string $ItemID
 * @property MyMessagesResponseDetailsType $ResponseDetails
 * @property MyMessagesFolderType $Folder
 * @property string $Content
 * @property MessageTypeCodeType $MessageType
 * @property ListingStatusCodeType $ListingStatus
 * @property QuestionTypeCodeType $QuestionType
 * @property bool $Replied
 * @property bool $HighPriority
 * @property DateTime $ItemEndTime
 * @property string $ItemTitle
 * @property MessageMediaType[] $MessageMedia
 */
class MyMessagesMessageType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Sender'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Sender',
            ],
            'RecipientUserID'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientUserID',
            ],
            'SendToName'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SendToName',
            ],
            'Subject'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Subject',
            ],
            'MessageID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageID',
            ],
            'ExternalMessageID' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalMessageID',
            ],
            'ContentType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ContentType',
            ],
            'Text'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Text',
            ],
            'Flagged'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Flagged',
            ],
            'Read'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Read',
            ],
            'CreationDate'      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreationDate',
            ],
            'ReceiveDate'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReceiveDate',
            ],
            'ExpirationDate'    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExpirationDate',
            ],
            'ItemID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'ResponseDetails'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyMessagesResponseDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ResponseDetails',
            ],
            'Folder'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MyMessagesFolderType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Folder',
            ],
            'Content'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Content',
            ],
            'MessageType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageType',
            ],
            'ListingStatus'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingStatus',
            ],
            'QuestionType'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QuestionType',
            ],
            'Replied'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Replied',
            ],
            'HighPriority'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HighPriority',
            ],
            'ItemEndTime'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemEndTime',
            ],
            'ItemTitle'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTitle',
            ],
            'MessageMedia'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MessageMediaType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'MessageMedia',
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
