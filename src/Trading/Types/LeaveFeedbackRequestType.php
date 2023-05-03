<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\CommentTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ItemArrivedWithinEDDCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $CommentText
 * @property CommentTypeCodeType $CommentType
 * @property string $TransactionID
 * @property string $TargetUser
 * @property ItemRatingDetailArrayType $SellerItemRatingDetailArray
 * @property string $OrderLineItemID
 * @property ItemArrivedWithinEDDCodeType $ItemArrivedWithinEDDType
 * @property bool $ItemDeliveredWithinEDD
 */
class LeaveFeedbackRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'CommentText'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentText',
            ],
            'CommentType'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CommentType',
            ],
            'TransactionID'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TransactionID',
            ],
            'TargetUser'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TargetUser',
            ],
            'SellerItemRatingDetailArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ItemRatingDetailArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellerItemRatingDetailArray',
            ],
            'OrderLineItemID'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'OrderLineItemID',
            ],
            'ItemArrivedWithinEDDType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemArrivedWithinEDDType',
            ],
            'ItemDeliveredWithinEDD'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemDeliveredWithinEDD',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'LeaveFeedbackRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
