<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\RecipientRelationCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SecondChanceOfferDurationCodeType;

use function array_key_exists;

/**
 * @property string $RecipientUserID
 * @property string $VerifyEligibilityOnly
 * @property string $RecipientPostalCode
 * @property RecipientRelationCodeType $RecipientRelationType
 * @property AmountType $NegotiatedPrice
 * @property SecondChanceOfferDurationCodeType $ListingDuration
 * @property string $ItemID
 * @property string $Comments
 */
class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'RecipientUserID'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientUserID',
            ],
            'VerifyEligibilityOnly' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VerifyEligibilityOnly',
            ],
            'RecipientPostalCode'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientPostalCode',
            ],
            'RecipientRelationType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RecipientRelationType',
            ],
            'NegotiatedPrice'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NegotiatedPrice',
            ],
            'ListingDuration'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingDuration',
            ],
            'ItemID'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'Comments'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Comments',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'AddTransactionConfirmationItemRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
