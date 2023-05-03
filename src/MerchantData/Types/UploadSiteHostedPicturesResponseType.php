<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use function array_key_exists;

/**
 * @property int $PictureSystemVersion
 * @property SiteHostedPictureDetailsType $SiteHostedPictureDetails
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PictureSystemVersion'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureSystemVersion',
            ],
            'SiteHostedPictureDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SiteHostedPictureDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SiteHostedPictureDetails',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'UploadSiteHostedPicturesResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
