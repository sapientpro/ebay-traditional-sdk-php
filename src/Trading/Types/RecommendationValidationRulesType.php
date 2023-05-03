<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\AspectUsageCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ProductRequiredCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SelectionModeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ValueFormatCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ValueTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\VariationPictureRuleCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\VariationSpecificsRuleCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ValueTypeCodeType $ValueType
 * @property int $MinValues
 * @property int $MaxValues
 * @property SelectionModeCodeType $SelectionMode
 * @property AspectUsageCodeType $AspectUsage
 * @property int $MaxValueLength
 * @property ProductRequiredCodeType $ProductRequired
 * @property int $Confidence
 * @property NameValueRelationshipType[] $Relationship
 * @property VariationPictureRuleCodeType $VariationPicture
 * @property VariationSpecificsRuleCodeType $VariationSpecifics
 * @property ValueFormatCodeType $ValueFormat
 */
class RecommendationValidationRulesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ValueType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValueType',
            ],
            'MinValues'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MinValues',
            ],
            'MaxValues'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxValues',
            ],
            'SelectionMode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SelectionMode',
            ],
            'AspectUsage'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AspectUsage',
            ],
            'MaxValueLength'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MaxValueLength',
            ],
            'ProductRequired'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ProductRequired',
            ],
            'Confidence'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Confidence',
            ],
            'Relationship'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NameValueRelationshipType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'Relationship',
            ],
            'VariationPicture'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationPicture',
            ],
            'VariationSpecifics' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
            ],
            'ValueFormat'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValueFormat',
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
