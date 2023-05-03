<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MerchantDataRequestHeaderType $Header
 * @property AddFixedPriceItemRequestType[] $AddFixedPriceItemRequest
 * @property AddItemRequestType[] $AddItemRequest
 * @property EndFixedPriceItemRequestType[] $EndFixedPriceItemRequest
 * @property EndItemRequestType[] $EndItemRequest
 * @property OrderAckRequestType[] $OrderAckRequest
 * @property RelistFixedPriceItemRequestType[] $RelistFixedPriceItemRequest
 * @property RelistItemRequestType[] $RelistItemRequest
 * @property ReviseFixedPriceItemRequestType[] $ReviseFixedPriceItemRequest
 * @property ReviseInventoryStatusRequestType[] $ReviseInventoryStatusRequest
 * @property ReviseItemRequestType[] $ReviseItemRequest
 * @property SetShipmentTrackingInfoRequestType[] $SetShipmentTrackingInfoRequest
 * @property UploadSiteHostedPicturesRequestType[] $UploadSiteHostedPicturesRequest
 * @property VerifyAddFixedPriceItemRequestType[] $VerifyAddFixedPriceItemRequest
 * @property VerifyAddItemRequestType[] $VerifyAddItemRequest
 */
class BulkDataExchangeRequestsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Header'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\MerchantDataRequestHeaderType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Header',
            ],
            'AddFixedPriceItemRequest'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddFixedPriceItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AddFixedPriceItemRequest',
            ],
            'AddItemRequest'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AddItemRequest',
            ],
            'EndFixedPriceItemRequest'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\EndFixedPriceItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'EndFixedPriceItemRequest',
            ],
            'EndItemRequest'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\EndItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'EndItemRequest',
            ],
            'OrderAckRequest'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderAckRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'OrderAckRequest',
            ],
            'RelistFixedPriceItemRequest'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistFixedPriceItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RelistFixedPriceItemRequest',
            ],
            'RelistItemRequest'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RelistItemRequest',
            ],
            'ReviseFixedPriceItemRequest'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseFixedPriceItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseFixedPriceItemRequest',
            ],
            'ReviseInventoryStatusRequest'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseInventoryStatusRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseInventoryStatusRequest',
            ],
            'ReviseItemRequest'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseItemRequest',
            ],
            'SetShipmentTrackingInfoRequest'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SetShipmentTrackingInfoRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SetShipmentTrackingInfoRequest',
            ],
            'UploadSiteHostedPicturesRequest' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UploadSiteHostedPicturesRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'UploadSiteHostedPicturesRequest',
            ],
            'VerifyAddFixedPriceItemRequest'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VerifyAddFixedPriceItemRequest',
            ],
            'VerifyAddItemRequest'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddItemRequestType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VerifyAddItemRequest',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeRequests';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
