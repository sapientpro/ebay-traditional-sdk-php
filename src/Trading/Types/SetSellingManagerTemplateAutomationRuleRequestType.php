<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property int $SaleTemplateID
 * @property SellingManagerAutoListType $AutomatedListingRule
 * @property SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SaleTemplateID'                 => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTemplateID',
            ],
            'AutomatedListingRule'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerAutoListType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutomatedListingRule',
            ],
            'AutomatedRelistingRule'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerAutoRelistType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutomatedRelistingRule',
            ],
            'AutomatedSecondChanceOfferRule' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerAutoSecondChanceOfferType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AutomatedSecondChanceOfferRule',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetSellingManagerTemplateAutomationRuleRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
