<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\GalleryStatusCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\GalleryTypeCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PhotoDisplayCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PictureSourceCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property GalleryTypeCodeType $GalleryType
 * @property string $GalleryURL
 * @property PhotoDisplayCodeType $PhotoDisplay
 * @property string[] $PictureURL
 * @property PictureSourceCodeType $PictureSource
 * @property string $GalleryDuration
 * @property GalleryStatusCodeType $GalleryStatus
 * @property string $GalleryErrorInfo
 * @property string[] $ExternalPictureURL
 * @property ExtendedPictureDetailsType $ExtendedPictureDetails
 */
class PictureDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'GalleryType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryType',
            ],
            'GalleryURL'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryURL',
            ],
            'PhotoDisplay'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PhotoDisplay',
            ],
            'PictureURL'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PictureURL',
            ],
            'PictureSource'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureSource',
            ],
            'GalleryDuration'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryDuration',
            ],
            'GalleryStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryStatus',
            ],
            'GalleryErrorInfo'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryErrorInfo',
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
