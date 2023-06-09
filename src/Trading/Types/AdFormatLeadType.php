<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AdFormatLeadStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $AdditionalInformation
 * @property AddressType $Address
 * @property string $BestTimeToCall
 * @property string $Email
 * @property DateTime $SubmittedTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property string $UserID
 * @property MemberMessageExchangeArrayType $MemberMessage
 * @property AdFormatLeadStatusCodeType $Status
 * @property string $ExternalEmail
 * @property string $PurchaseTimeFrame
 * @property string $TradeInYear
 * @property string $TradeInMake
 * @property string $TradeInModel
 * @property bool $FinancingAnswer
 * @property bool $Answer1
 * @property bool $Answer2
 */
class AdFormatLeadType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AdditionalInformation' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdditionalInformation',
            ],
            'Address'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Address',
            ],
            'BestTimeToCall'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestTimeToCall',
            ],
            'Email'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Email',
            ],
            'SubmittedTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SubmittedTime',
            ],
            'ItemID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'ItemTitle'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTitle',
            ],
            'UserID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserID',
            ],
            'MemberMessage'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MemberMessageExchangeArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MemberMessage',
            ],
            'Status'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'ExternalEmail'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalEmail',
            ],
            'PurchaseTimeFrame'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PurchaseTimeFrame',
            ],
            'TradeInYear'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TradeInYear',
            ],
            'TradeInMake'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TradeInMake',
            ],
            'TradeInModel'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TradeInModel',
            ],
            'FinancingAnswer'       => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FinancingAnswer',
            ],
            'Answer1'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Answer1',
            ],
            'Answer2'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Answer2',
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
