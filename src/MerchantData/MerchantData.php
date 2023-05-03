<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData;

use SapientPro\EbayTraditionalSDK\MerchantData\Types\ActiveInventoryReportResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\AddFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\AddItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\BulkDataExchangeResponsesType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\EndFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\EndItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\FeeSettlementReportResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderAckResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseInventoryStatusResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\SetShipmentTrackingInfoResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\SoldReportResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\UploadSiteHostedPicturesResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddItemResponseType;
use SapientPro\EbayTraditionalSDK\Parser\XmlParser;
use SapientPro\EbayTraditionalSDK\Types\RepeatableType;

/**
 * Unlike other services there is no MerchantData service class as all operations
 * are performed via other services.
 *
 * This class is to help client code parse the XML that has been returned via an
 * attachment in a LMS response.
 */
class MerchantData
{
    private XmlParser $xmlParser;

    public function __construct()
    {
        $this->xmlParser = new XmlParser(
            '\SapientPro\EbayTraditionalSDK\MerchantData\Types\BulkDataExchangeResponsesType'
        );
    }

    /**
     * @param  string  $xml
     *
     * @return ActiveInventoryReportResponseType
     */
    public function activeInventoryReport(string $xml): ActiveInventoryReportResponseType
    {
        return $this->bulkDataExchangeResponses($xml)->ActiveInventoryReport;
    }

    /**
     * @param  string  $xml
     *
     * @return BulkDataExchangeResponsesType
     */
    public function bulkDataExchangeResponses(string $xml): BulkDataExchangeResponsesType
    {
        return $this->parseXml($xml);
    }

    /**
     * @param  string  $xml
     *
     * @return BulkDataExchangeResponsesType
     */
    private function parseXml(string $xml): BulkDataExchangeResponsesType
    {
        return $this->xmlParser->parse($xml);
    }

    /**
     * @param  string  $xml
     *
     * @return AddFixedPriceItemResponseType[]
     */
    public function addFixedPriceItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->AddFixedPriceItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return AddItemResponseType[]
     */
    public function addItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->AddItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return EndFixedPriceItemResponseType[]
     */
    public function endFixedPriceItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->EndFixedPriceItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return EndItemResponseType[]
     */
    public function endItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->EndItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return FeeSettlementReportResponseType
     */
    public function feeSettlementReport(string $xml): FeeSettlementReportResponseType
    {
        return $this->bulkDataExchangeResponses($xml)->FeeSettlementReport;
    }

    /**
     * @param  string  $xml
     *
     * @return OrderAckResponseType[]
     */
    public function orderAck(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->OrderAckResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return RelistFixedPriceItemResponseType[]
     */
    public function relistFixedPriceItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->RelistFixedPriceItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return RelistItemResponseType[]
     */
    public function relistItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->RelistItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return ReviseFixedPriceItemResponseType[]
     */
    public function reviseFixedPriceItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseFixedPriceItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return ReviseInventoryStatusResponseType[]
     */
    public function reviseInventoryStatus(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseInventoryStatusResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return ReviseItemResponseType[]
     */
    public function reviseItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return SetShipmentTrackingInfoResponseType[]
     */
    public function setShipmentTrackingInfo(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->SetShipmentTrackingInfoResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return SoldReportResponseType
     */
    public function soldReport(string $xml): SoldReportResponseType
    {
        return $this->bulkDataExchangeResponses($xml)->SoldReport;
    }

    /**
     * @param  string  $xml
     *
     * @return UploadSiteHostedPicturesResponseType[]
     */
    public function uploadSiteHostedPictures(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->UploadSiteHostedPicturesResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return VerifyAddFixedPriceItemResponseType[]
     */
    public function verifyAddFixedPriceItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddFixedPriceItemResponse;
    }

    /**
     * @param  string  $xml
     *
     * @return VerifyAddItemResponseType[]
     */
    public function verifyAddItem(string $xml): RepeatableType
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddItemResponse;
    }
}
