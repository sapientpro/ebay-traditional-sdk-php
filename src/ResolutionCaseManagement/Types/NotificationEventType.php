<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\CaseType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\CaseUserRoleType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\NotificationEventNameType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property NotificationEventNameType $NotificationEventName
 * @property string $RecipientUserID
 * @property string $ExternalUserData
 * @property string $CaseId
 * @property CaseType $CaseType
 * @property string $ItemId
 * @property string $TransactionId
 * @property DateTime $CreationDate
 * @property string $OtherPartyId
 * @property CaseUserRoleType $OtherPartyRole
 * @property string $CaseStatus
 * @property string $CaseGlobalId
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
            'CaseId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CaseId',
            ],
            'CaseType'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CaseType',
            ],
            'ItemId'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemId',
            ],
            'TransactionId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionId',
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
            'CaseStatus'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CaseStatus',
            ],
            'CaseGlobalId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CaseGlobalId',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
