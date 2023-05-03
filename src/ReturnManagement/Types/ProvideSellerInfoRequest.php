<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use function array_key_exists;

/**
 * @property ReturnIdType $ReturnId
 * @property string $returnMerchandiseAuthorization
 * @property Address $returnAddress
 */
class ProvideSellerInfoRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ReturnId'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnId',
            ],
            'returnMerchandiseAuthorization' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnMerchandiseAuthorization',
            ],
            'returnAddress'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\Address',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnAddress',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'provideSellerInfoRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
