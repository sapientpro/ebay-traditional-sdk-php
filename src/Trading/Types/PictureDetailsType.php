<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\GalleryStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\GalleryTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PhotoDisplayCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PictureSourceCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $GalleryURL
 * @property GalleryTypeCodeType $GalleryType
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
            'GalleryURL'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryURL',
            ],
            'GalleryType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GalleryType',
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
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ExtendedPictureDetailsType',
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
