<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\MessageStatusTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ItemType $Item
 * @property MemberMessageType $Question
 * @property string[] $Response
 * @property MessageStatusTypeCodeType $MessageStatus
 * @property DateTime $CreationDate
 * @property DateTime $LastModifiedDate
 * @property MessageMediaType[] $MessageMedia
 */
class MemberMessageExchangeType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Item'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Item',
            ],
            'Question'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MemberMessageType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Question',
            ],
            'Response'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Response',
            ],
            'MessageStatus'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageStatus',
            ],
            'CreationDate'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreationDate',
            ],
            'LastModifiedDate' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastModifiedDate',
            ],
            'MessageMedia'     => [
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
