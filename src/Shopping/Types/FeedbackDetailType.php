<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\CommentTypeCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\FeedbackRatingStarCodeType;
use SapientPro\EbayTraditionalSDK\Shopping\Enums\TradingRoleCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property string $CommentingUser
 * @property int $CommentingUserScore
 * @property string $CommentText
 * @property DateTime $CommentTime
 * @property CommentTypeCodeType $CommentType
 * @property string $FeedbackResponse
 * @property string $FollowUp
 * @property string $ItemID
 * @property TradingRoleCodeType $Role
 * @property string $ItemTitle
 * @property AmountType $ItemPrice
 * @property string $FeedbackID
 * @property string $TransactionID
 * @property bool $CommentReplaced
 * @property bool $ResponseReplaced
 * @property bool $FollowUpReplaced
 * @property bool $Countable
 */
class FeedbackDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'FeedbackRatingStar'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackRatingStar',
            ],
            'CommentingUser'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentingUser',
            ],
            'CommentingUserScore' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentingUserScore',
            ],
            'CommentText'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentText',
            ],
            'CommentTime'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentTime',
            ],
            'CommentType'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentType',
            ],
            'FeedbackResponse'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackResponse',
            ],
            'FollowUp'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FollowUp',
            ],
            'ItemID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'Role'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Role',
            ],
            'ItemTitle'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemTitle',
            ],
            'ItemPrice'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemPrice',
            ],
            'FeedbackID'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackID',
            ],
            'TransactionID'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'CommentReplaced'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentReplaced',
            ],
            'ResponseReplaced'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ResponseReplaced',
            ],
            'FollowUpReplaced'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FollowUpReplaced',
            ],
            'Countable'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Countable',
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
