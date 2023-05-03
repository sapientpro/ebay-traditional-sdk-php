<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\FeedbackRatingStarCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\SellerBusinessCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\SellerLevelCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\SiteCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\UserStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $UserID
 * @property bool $FeedbackPrivate
 * @property FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property int $FeedbackScore
 * @property bool $UserAnonymized
 * @property bool $NewUser
 * @property DateTime $RegistrationDate
 * @property SiteCodeType $RegistrationSite
 * @property UserStatusCodeType $Status
 * @property SellerBusinessCodeType $SellerBusinessType
 * @property string $StoreURL
 * @property string $StoreName
 * @property string $SellerItemsURL
 * @property string $AboutMeURL
 * @property string $MyWorldURL
 * @property string $MyWorldSmallImage
 * @property string $MyWorldLargeImage
 * @property string $ReviewsAndGuidesURL
 * @property string $FeedbackDetailsURL
 * @property float $PositiveFeedbackPercent
 * @property SellerLevelCodeType $SellerLevel
 * @property bool $TopRatedSeller
 */
class SimpleUserType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'UserID'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserID',
            ],
            'FeedbackPrivate'         => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackPrivate',
            ],
            'FeedbackRatingStar'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackRatingStar',
            ],
            'FeedbackScore'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackScore',
            ],
            'UserAnonymized'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserAnonymized',
            ],
            'NewUser'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NewUser',
            ],
            'RegistrationDate'        => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegistrationDate',
            ],
            'RegistrationSite'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RegistrationSite',
            ],
            'Status'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Status',
            ],
            'SellerBusinessType'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerBusinessType',
            ],
            'StoreURL'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreURL',
            ],
            'StoreName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StoreName',
            ],
            'SellerItemsURL'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerItemsURL',
            ],
            'AboutMeURL'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AboutMeURL',
            ],
            'MyWorldURL'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MyWorldURL',
            ],
            'MyWorldSmallImage'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MyWorldSmallImage',
            ],
            'MyWorldLargeImage'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MyWorldLargeImage',
            ],
            'ReviewsAndGuidesURL'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReviewsAndGuidesURL',
            ],
            'FeedbackDetailsURL'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackDetailsURL',
            ],
            'PositiveFeedbackPercent' => [
                'type'        => 'double',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PositiveFeedbackPercent',
            ],
            'SellerLevel'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerLevel',
            ],
            'TopRatedSeller'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TopRatedSeller',
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
