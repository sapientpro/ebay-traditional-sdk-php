<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PictureSetCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PictureUploadPolicyCodeType;

use function array_key_exists;

/**
 * @property string $PictureName
 * @property int $PictureSystemVersion
 * @property PictureSetCodeType $PictureSet
 * @property Base64BinaryType $PictureData
 * @property PictureUploadPolicyCodeType $PictureUploadPolicy
 * @property string[] $ExternalPictureURL
 * @property int $ExtensionInDays
 */
class UploadSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PictureName'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureName',
            ],
            'PictureSystemVersion' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureSystemVersion',
            ],
            'PictureSet'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureSet',
            ],
            'PictureData'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\Base64BinaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureData',
            ],
            'PictureUploadPolicy'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureUploadPolicy',
            ],
            'ExternalPictureURL'   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ExternalPictureURL',
            ],
            'ExtensionInDays'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExtensionInDays',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'UploadSiteHostedPicturesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
