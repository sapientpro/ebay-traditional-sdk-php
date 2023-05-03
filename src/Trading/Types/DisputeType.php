<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeCreditEligibilityCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeExplanationCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeReasonCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeRecordTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeStateCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\TradingRoleCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $DisputeID
 * @property DisputeRecordTypeCodeType $DisputeRecordType
 * @property DisputeStateCodeType $DisputeState
 * @property DisputeStatusCodeType $DisputeStatus
 * @property TradingRoleCodeType $OtherPartyRole
 * @property string $OtherPartyName
 * @property TradingRoleCodeType $UserRole
 * @property string $BuyerUserID
 * @property string $SellerUserID
 * @property string $TransactionID
 * @property ItemType $Item
 * @property DisputeReasonCodeType $DisputeReason
 * @property DisputeExplanationCodeType $DisputeExplanation
 * @property DisputeCreditEligibilityCodeType $DisputeCreditEligibility
 * @property DateTime $DisputeCreatedTime
 * @property DateTime $DisputeModifiedTime
 * @property DisputeResolutionType[] $DisputeResolution
 * @property DisputeMessageType[] $DisputeMessage
 * @property bool $Escalation
 * @property bool $PurchaseProtection
 * @property string $OrderLineItemID
 */
class DisputeType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DisputeID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeID',
            ],
            'DisputeRecordType'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeRecordType',
            ],
            'DisputeState'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeState',
            ],
            'DisputeStatus'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeStatus',
            ],
            'OtherPartyRole'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OtherPartyRole',
            ],
            'OtherPartyName'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OtherPartyName',
            ],
            'UserRole'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserRole',
            ],
            'BuyerUserID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerUserID',
            ],
            'SellerUserID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerUserID',
            ],
            'TransactionID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'Item'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Item',
            ],
            'DisputeReason'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeReason',
            ],
            'DisputeExplanation'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeExplanation',
            ],
            'DisputeCreditEligibility' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeCreditEligibility',
            ],
            'DisputeCreatedTime'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeCreatedTime',
            ],
            'DisputeModifiedTime'      => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeModifiedTime',
            ],
            'DisputeResolution'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DisputeResolutionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DisputeResolution',
            ],
            'DisputeMessage'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DisputeMessageType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DisputeMessage',
            ],
            'Escalation'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Escalation',
            ],
            'PurchaseProtection'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PurchaseProtection',
            ],
            'OrderLineItemID'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
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
