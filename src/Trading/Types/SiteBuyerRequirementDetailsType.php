<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $LinkedPayPalAccount
 * @property MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
 * @property MaximumItemRequirementsDetailsType $MaximumItemRequirements
 * @property MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
 * @property MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
 * @property bool $ShipToRegistrationCountry
 * @property VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 */
class SiteBuyerRequirementDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'LinkedPayPalAccount'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LinkedPayPalAccount',
            ],
            'MaximumBuyerPolicyViolations' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumBuyerPolicyViolations',
            ],
            'MaximumItemRequirements'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumItemRequirementsDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumItemRequirements',
            ],
            'MaximumUnpaidItemStrikesInfo' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaximumUnpaidItemStrikesInfo',
            ],
            'MinimumFeedbackScore'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MinimumFeedbackScoreDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinimumFeedbackScore',
            ],
            'ShipToRegistrationCountry'    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShipToRegistrationCountry',
            ],
            'VerifiedUserRequirements'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VerifiedUserRequirementsDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VerifiedUserRequirements',
            ],
            'DetailVersion'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailVersion',
            ],
            'UpdateTime'                   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
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
