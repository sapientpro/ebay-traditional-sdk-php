<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AddressType $Address
 * @property string $Fax
 * @property string $Email
 * @property string $AdditionalContactInformation
 * @property string $TradeRegistrationNumber
 * @property bool $LegalInvoice
 * @property string $TermsAndConditions
 * @property VATDetailsType $VATDetails
 */
class BusinessSellerDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Address'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Address',
            ],
            'Fax'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Fax',
            ],
            'Email'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Email',
            ],
            'AdditionalContactInformation' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdditionalContactInformation',
            ],
            'TradeRegistrationNumber'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TradeRegistrationNumber',
            ],
            'LegalInvoice'                 => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LegalInvoice',
            ],
            'TermsAndConditions'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'TermsAndConditions',
            ],
            'VATDetails'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VATDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VATDetails',
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
