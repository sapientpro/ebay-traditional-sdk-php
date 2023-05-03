<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $ShipToRegistrationCountry
 * @property bool $ZeroFeedbackScore
 * @property int $MinimumFeedbackScore
 * @property MaximumItemRequirementsType $MaximumItemRequirements
 * @property bool $LinkedPayPalAccount
 * @property VerifiedUserRequirementsType $VerifiedUserRequirements
 * @property MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
 * @property MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
 */
class BuyerRequirementDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShipToRegistrationCountry'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipToRegistrationCountry',
            ],
            'ZeroFeedbackScore'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ZeroFeedbackScore',
            ],
            'MinimumFeedbackScore'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumFeedbackScore',
            ],
            'MaximumItemRequirements'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumItemRequirementsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumItemRequirements',
            ],
            'LinkedPayPalAccount'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LinkedPayPalAccount',
            ],
            'VerifiedUserRequirements'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VerifiedUserRequirementsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VerifiedUserRequirements',
            ],
            'MaximumUnpaidItemStrikesInfo' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumUnpaidItemStrikesInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumUnpaidItemStrikesInfo',
            ],
            'MaximumBuyerPolicyViolations' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumBuyerPolicyViolationsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumBuyerPolicyViolations',
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
