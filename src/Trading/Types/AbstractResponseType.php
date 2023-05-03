<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AckCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $Timestamp
 * @property AckCodeType $Ack
 * @property string $CorrelationID
 * @property ErrorType[] $Errors
 * @property string $Message
 * @property string $Version
 * @property string $Build
 * @property string $NotificationEventName
 * @property DuplicateInvocationDetailsType $DuplicateInvocationDetails
 * @property string $RecipientUserID
 * @property string $EIASToken
 * @property string $NotificationSignature
 * @property string $HardExpirationWarning
 * @property BotBlockResponseType $BotBlock
 * @property string $ExternalUserData
 */
class AbstractResponseType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Timestamp'                  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Timestamp',
            ],
            'Ack'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Ack',
            ],
            'CorrelationID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CorrelationID',
            ],
            'Errors'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ErrorType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Errors',
            ],
            'Message'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Message',
            ],
            'Version'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Version',
            ],
            'Build'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Build',
            ],
            'NotificationEventName'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotificationEventName',
            ],
            'DuplicateInvocationDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DuplicateInvocationDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DuplicateInvocationDetails',
            ],
            'RecipientUserID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientUserID',
            ],
            'EIASToken'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EIASToken',
            ],
            'NotificationSignature'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotificationSignature',
            ],
            'HardExpirationWarning'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HardExpirationWarning',
            ],
            'BotBlock'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BotBlockResponseType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BotBlock',
            ],
            'ExternalUserData'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalUserData',
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
