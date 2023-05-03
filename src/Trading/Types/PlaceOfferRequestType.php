<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property OfferType $Offer
 * @property string $ItemID
 * @property bool $BlockOnWarning
 * @property AffiliateTrackingDetailsType $AffiliateTrackingDetails
 * @property NameValueListArrayType $VariationSpecifics
 */
class PlaceOfferRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Offer'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\OfferType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Offer',
            ],
            'ItemID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemID',
            ],
            'BlockOnWarning'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BlockOnWarning',
            ],
            'AffiliateTrackingDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AffiliateTrackingDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AffiliateTrackingDetails',
            ],
            'VariationSpecifics'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NameValueListArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VariationSpecifics',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'PlaceOfferRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
