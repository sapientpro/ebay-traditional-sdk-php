<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\NotificationEventNameType;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ReturnUserRoleType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property NotificationEventNameType $NotificationEventName
 * @property string $RecipientUserID
 * @property string $ExternalUserData
 * @property string $ReturnId
 * @property DateTime $CreationDate
 * @property string $OtherPartyId
 * @property ReturnUserRoleType $OtherPartyRole
 * @property string $ReturnStatus
 * @property string $ReturnGlobalId
 */
class NotificationEventType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'NotificationEventName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotificationEventName',
            ],
            'RecipientUserID'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientUserID',
            ],
            'ExternalUserData'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalUserData',
            ],
            'ReturnId'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnId',
            ],
            'CreationDate'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CreationDate',
            ],
            'OtherPartyId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OtherPartyId',
            ],
            'OtherPartyRole'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OtherPartyRole',
            ],
            'ReturnStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnStatus',
            ],
            'ReturnGlobalId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnGlobalId',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
