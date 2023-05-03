<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ActiveInventoryReportResponseType $ActiveInventoryReport
 * @property AddFixedPriceItemResponseType[] $AddFixedPriceItemResponse
 * @property AddItemResponseType[] $AddItemResponse
 * @property EndFixedPriceItemResponseType[] $EndFixedPriceItemResponse
 * @property EndItemResponseType[] $EndItemResponse
 * @property FeeSettlementReportResponseType $FeeSettlementReport
 * @property OrderAckResponseType[] $OrderAckResponse
 * @property RelistFixedPriceItemResponseType[] $RelistFixedPriceItemResponse
 * @property RelistItemResponseType[] $RelistItemResponse
 * @property ReviseFixedPriceItemResponseType[] $ReviseFixedPriceItemResponse
 * @property ReviseInventoryStatusResponseType[] $ReviseInventoryStatusResponse
 * @property ReviseItemResponseType[] $ReviseItemResponse
 * @property SetShipmentTrackingInfoResponseType[] $SetShipmentTrackingInfoResponse
 * @property SoldReportResponseType $SoldReport
 * @property UploadSiteHostedPicturesResponseType[] $UploadSiteHostedPicturesResponse
 * @property VerifyAddFixedPriceItemResponseType[] $VerifyAddFixedPriceItemResponse
 * @property VerifyAddItemResponseType[] $VerifyAddItemResponse
 */
class BulkDataExchangeResponsesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ActiveInventoryReport'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ActiveInventoryReportResponseType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ActiveInventoryReport',
            ],
            'AddFixedPriceItemResponse'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddFixedPriceItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AddFixedPriceItemResponse',
            ],
            'AddItemResponse'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\AddItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'AddItemResponse',
            ],
            'EndFixedPriceItemResponse'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\EndFixedPriceItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'EndFixedPriceItemResponse',
            ],
            'EndItemResponse'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\EndItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'EndItemResponse',
            ],
            'FeeSettlementReport'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\FeeSettlementReportResponseType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeeSettlementReport',
            ],
            'OrderAckResponse'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderAckResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'OrderAckResponse',
            ],
            'RelistFixedPriceItemResponse'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistFixedPriceItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RelistFixedPriceItemResponse',
            ],
            'RelistItemResponse'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'RelistItemResponse',
            ],
            'ReviseFixedPriceItemResponse'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseFixedPriceItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseFixedPriceItemResponse',
            ],
            'ReviseInventoryStatusResponse'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseInventoryStatusResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseInventoryStatusResponse',
            ],
            'ReviseItemResponse'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ReviseItemResponse',
            ],
            'SetShipmentTrackingInfoResponse'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SetShipmentTrackingInfoResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SetShipmentTrackingInfoResponse',
            ],
            'SoldReport'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\SoldReportResponseType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SoldReport',
            ],
            'UploadSiteHostedPicturesResponse' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\UploadSiteHostedPicturesResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'UploadSiteHostedPicturesResponse',
            ],
            'VerifyAddFixedPriceItemResponse'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VerifyAddFixedPriceItemResponse',
            ],
            'VerifyAddItemResponse'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddItemResponseType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'VerifyAddItemResponse',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeResponses';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
