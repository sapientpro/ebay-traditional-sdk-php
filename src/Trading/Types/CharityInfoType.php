<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Name
 * @property bool $ListingNPEmailNotifPref
 * @property string $ListingNPEmail
 * @property string $ListingNPContactName
 * @property string $Mission
 * @property string $LogoURL
 * @property int $CharityRegion
 * @property int[] $CharityDomain
 * @property string $LogoURLSelling
 * @property bool $DisplayLogoSelling
 * @property string $Description
 * @property string $ExternalID
 * @property int $PopularityIndex
 * @property string $EIN
 * @property string $NonProfitSecondName
 * @property NonProfitAddressType[] $NonProfitAddress
 * @property NonProfitSocialAddressType[] $NonProfitSocialAddress
 * @property string $id
 */
class CharityInfoType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Name'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'ListingNPEmailNotifPref' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingNPEmailNotifPref',
            ],
            'ListingNPEmail'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingNPEmail',
            ],
            'ListingNPContactName'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ListingNPContactName',
            ],
            'Mission'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Mission',
            ],
            'LogoURL'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogoURL',
            ],
            'CharityRegion'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CharityRegion',
            ],
            'CharityDomain'           => [
                'type'        => 'integer',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'CharityDomain',
            ],
            'LogoURLSelling'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LogoURLSelling',
            ],
            'DisplayLogoSelling'      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisplayLogoSelling',
            ],
            'Description'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'ExternalID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalID',
            ],
            'PopularityIndex'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PopularityIndex',
            ],
            'EIN'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EIN',
            ],
            'NonProfitSecondName'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NonProfitSecondName',
            ],
            'NonProfitAddress'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NonProfitAddressType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'NonProfitAddress',
            ],
            'NonProfitSocialAddress'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NonProfitSocialAddressType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'NonProfitSocialAddress',
            ],
            'id'                      => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'id',
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
