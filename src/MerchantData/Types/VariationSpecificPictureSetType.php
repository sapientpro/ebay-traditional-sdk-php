<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $VariationSpecificValue
 * @property string[] $PictureURL
 * @property string[] $ExternalPictureURL
 * @property ExtendedPictureDetailsType $ExtendedPictureDetails
 */
class VariationSpecificPictureSetType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'VariationSpecificValue' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecificValue',
            ],
            'PictureURL'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PictureURL',
            ],
            'ExternalPictureURL'     => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalPictureURL',
            ],
            'ExtendedPictureDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ExtendedPictureDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtendedPictureDetails',
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
