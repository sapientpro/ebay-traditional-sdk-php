<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PictureFormatCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PictureSetCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $PictureName
 * @property PictureSetCodeType $PictureSet
 * @property PictureFormatCodeType $PictureFormat
 * @property string $FullURL
 * @property string $BaseURL
 * @property PictureSetMemberType[] $PictureSetMember
 * @property string $ExternalPictureURL
 * @property DateTime $UseByDate
 */
class SiteHostedPictureDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PictureName'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureName',
            ],
            'PictureSet'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureSet',
            ],
            'PictureFormat'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PictureFormat',
            ],
            'FullURL'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FullURL',
            ],
            'BaseURL'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BaseURL',
            ],
            'PictureSetMember'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PictureSetMemberType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'PictureSetMember',
            ],
            'ExternalPictureURL' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalPictureURL',
            ],
            'UseByDate'          => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UseByDate',
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
