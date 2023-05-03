<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\BusinessRoleType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\EBaySubscriptionTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\FeedbackRatingStarCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PayPalAccountLevelCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PayPalAccountStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PayPalAccountTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\UserStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\VATStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $AboutMePage
 * @property string $EIASToken
 * @property string $Email
 * @property int $FeedbackScore
 * @property int $UniqueNegativeFeedbackCount
 * @property int $UniquePositiveFeedbackCount
 * @property float $PositiveFeedbackPercent
 * @property bool $FeedbackPrivate
 * @property FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property bool $IDVerified
 * @property bool $eBayGoodStanding
 * @property bool $NewUser
 * @property AddressType $RegistrationAddress
 * @property DateTime $RegistrationDate
 * @property SiteCodeType $Site
 * @property UserStatusCodeType $Status
 * @property string $UserID
 * @property bool $UserIDChanged
 * @property DateTime $UserIDLastChanged
 * @property VATStatusCodeType $VATStatus
 * @property BuyerType $BuyerInfo
 * @property SellerType $SellerInfo
 * @property BusinessRoleType $BusinessRole
 * @property PayPalAccountLevelCodeType $PayPalAccountLevel
 * @property PayPalAccountTypeCodeType $PayPalAccountType
 * @property PayPalAccountStatusCodeType $PayPalAccountStatus
 * @property EBaySubscriptionTypeCodeType[] $UserSubscription
 * @property bool $eBayWikiReadOnly
 * @property int $TUVLevel
 * @property string $VATID
 * @property bool $MotorsDealer
 * @property BiddingSummaryType $BiddingSummary
 * @property bool $UserAnonymized
 * @property int $UniqueNeutralFeedbackCount
 * @property bool $EnterpriseSeller
 * @property string $BillingEmail
 * @property bool $QualifiesForSelling
 * @property string $StaticAlias
 * @property AddressType $ShippingAddress
 * @property MembershipDetailsType $Membership
 * @property string $UserFirstName
 * @property string $UserLastName
 */
class UserType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'AboutMePage'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AboutMePage',
            ],
            'EIASToken'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EIASToken',
            ],
            'Email'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Email',
            ],
            'FeedbackScore'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackScore',
            ],
            'UniqueNegativeFeedbackCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueNegativeFeedbackCount',
            ],
            'UniquePositiveFeedbackCount' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniquePositiveFeedbackCount',
            ],
            'PositiveFeedbackPercent'     => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PositiveFeedbackPercent',
            ],
            'FeedbackPrivate'             => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackPrivate',
            ],
            'FeedbackRatingStar'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackRatingStar',
            ],
            'IDVerified'                  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IDVerified',
            ],
            'eBayGoodStanding'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayGoodStanding',
            ],
            'NewUser'                     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NewUser',
            ],
            'RegistrationAddress'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegistrationAddress',
            ],
            'RegistrationDate'            => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegistrationDate',
            ],
            'Site'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Site',
            ],
            'Status'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'UserID'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserID',
            ],
            'UserIDChanged'               => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserIDChanged',
            ],
            'UserIDLastChanged'           => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserIDLastChanged',
            ],
            'VATStatus'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATStatus',
            ],
            'BuyerInfo'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BuyerType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BuyerInfo',
            ],
            'SellerInfo'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellerType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerInfo',
            ],
            'BusinessRole'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BusinessRole',
            ],
            'PayPalAccountLevel'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalAccountLevel',
            ],
            'PayPalAccountType'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalAccountType',
            ],
            'PayPalAccountStatus'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PayPalAccountStatus',
            ],
            'UserSubscription'            => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'UserSubscription',
            ],
            'eBayWikiReadOnly'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eBayWikiReadOnly',
            ],
            'TUVLevel'                    => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TUVLevel',
            ],
            'VATID'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATID',
            ],
            'MotorsDealer'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MotorsDealer',
            ],
            'BiddingSummary'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\BiddingSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BiddingSummary',
            ],
            'UserAnonymized'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserAnonymized',
            ],
            'UniqueNeutralFeedbackCount'  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UniqueNeutralFeedbackCount',
            ],
            'EnterpriseSeller'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EnterpriseSeller',
            ],
            'BillingEmail'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BillingEmail',
            ],
            'QualifiesForSelling'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'QualifiesForSelling',
            ],
            'StaticAlias'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StaticAlias',
            ],
            'ShippingAddress'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingAddress',
            ],
            'Membership'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MembershipDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Membership',
            ],
            'UserFirstName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserFirstName',
            ],
            'UserLastName'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserLastName',
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
