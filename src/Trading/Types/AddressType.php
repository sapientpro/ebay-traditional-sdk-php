<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\AddressOwnerCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AddressUsageCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\CountryCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Name
 * @property string $Street
 * @property string $Street1
 * @property string $Street2
 * @property string $CityName
 * @property string $County
 * @property string $StateOrProvince
 * @property CountryCodeType $Country
 * @property string $CountryName
 * @property string $Phone
 * @property CountryCodeType $PhoneCountryCode
 * @property string $PhoneCountryPrefix
 * @property string $PhoneAreaOrCityCode
 * @property string $PhoneLocalNumber
 * @property CountryCodeType $Phone2CountryCode
 * @property string $Phone2CountryPrefix
 * @property string $Phone2AreaOrCityCode
 * @property string $Phone2LocalNumber
 * @property string $PostalCode
 * @property string $AddressID
 * @property AddressOwnerCodeType $AddressOwner
 * @property string $ExternalAddressID
 * @property string $InternationalName
 * @property string $InternationalStateAndCity
 * @property string $InternationalStreet
 * @property string $CompanyName
 * @property string $FirstName
 * @property string $LastName
 * @property string $Phone2
 * @property AddressUsageCodeType $AddressUsage
 * @property string $ReferenceID
 * @property AddressAttributeType[] $AddressAttribute
 */
class AddressType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Name'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Name',
            ],
            'Street'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Street',
            ],
            'Street1'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Street1',
            ],
            'Street2'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Street2',
            ],
            'CityName'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CityName',
            ],
            'County'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'County',
            ],
            'StateOrProvince'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StateOrProvince',
            ],
            'Country'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Country',
            ],
            'CountryName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CountryName',
            ],
            'Phone'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone',
            ],
            'PhoneCountryCode'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PhoneCountryCode',
            ],
            'PhoneCountryPrefix'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PhoneCountryPrefix',
            ],
            'PhoneAreaOrCityCode'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PhoneAreaOrCityCode',
            ],
            'PhoneLocalNumber'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PhoneLocalNumber',
            ],
            'Phone2CountryCode'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone2CountryCode',
            ],
            'Phone2CountryPrefix'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone2CountryPrefix',
            ],
            'Phone2AreaOrCityCode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone2AreaOrCityCode',
            ],
            'Phone2LocalNumber'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone2LocalNumber',
            ],
            'PostalCode'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PostalCode',
            ],
            'AddressID'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AddressID',
            ],
            'AddressOwner'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AddressOwner',
            ],
            'ExternalAddressID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalAddressID',
            ],
            'InternationalName'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalName',
            ],
            'InternationalStateAndCity' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalStateAndCity',
            ],
            'InternationalStreet'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalStreet',
            ],
            'CompanyName'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CompanyName',
            ],
            'FirstName'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FirstName',
            ],
            'LastName'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LastName',
            ],
            'Phone2'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Phone2',
            ],
            'AddressUsage'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AddressUsage',
            ],
            'ReferenceID'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReferenceID',
            ],
            'AddressAttribute'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressAttributeType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AddressAttribute',
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
