<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\BestOfferStatusCodeType;

use function array_key_exists;

/**
 * @property string $ItemID
 * @property string $BestOfferID
 * @property BestOfferStatusCodeType $BestOfferStatus
 * @property PaginationType $Pagination
 */
class GetBestOffersRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ItemID'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'BestOfferID'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferID',
            ],
            'BestOfferStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BestOfferStatus',
            ],
            'Pagination'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetBestOffersRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
