<?php

namespace SapientPro\EbayTraditionalSDK\Tests\MerchantData;

use SapientPro\EbayTraditionalSDK\MerchantData\MerchantData;
use PHPUnit\Framework\TestCase;

class MerchantDataTest extends TestCase
{
    private $merchantData;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\MerchantData', $this->merchantData);
    }

    public function testActiveInventoryReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ActiveInventoryReport.xml');
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\ActiveInventoryReportResponseType', $this->merchantData->activeInventoryReport($xml));
    }

    public function testAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddFixedPriceItem.xml');
        $responses = $this->merchantData->addFixedPriceItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\AddFixedPriceItemResponseType', $response);
        }
    }

    public function testAddItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddItem.xml');
        $responses = $this->merchantData->addItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\AddItemResponseType', $response);
        }
    }

    public function testEndFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndFixedPriceItem.xml');
        $responses = $this->merchantData->endFixedPriceItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\EndFixedPriceItemResponseType', $response);
        }
    }

    public function testEndItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndItem.xml');
        $responses = $this->merchantData->endItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\EndItemResponseType', $response);
        }
    }

    public function testFeeSettlementReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/FeeSettlementReport.xml');
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\FeeSettlementReportResponseType', $this->merchantData->feeSettlementReport($xml));
    }

    public function testOrderAck()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/OrderAck.xml');
        $responses = $this->merchantData->orderAck($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\OrderAckResponseType', $response);
        }
    }

    public function testRelistFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistFixedPriceItem.xml');
        $responses = $this->merchantData->relistFixedPriceItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistFixedPriceItemResponseType', $response);
        }
    }

    public function testRelistItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistItem.xml');
        $responses = $this->merchantData->relistItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\RelistItemResponseType', $response);
        }
    }

    public function testReviseFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseFixedPriceItem.xml');
        $responses = $this->merchantData->reviseFixedPriceItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseFixedPriceItemResponseType', $response);
        }
    }

    public function testReviseInventoryStatus()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseInventoryStatus.xml');
        $responses = $this->merchantData->reviseInventoryStatus($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseInventoryStatusResponseType', $response);
        }
    }

    public function testReviseItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseItem.xml');
        $responses = $this->merchantData->reviseItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\ReviseItemResponseType', $response);
        }
    }

    public function testSetShipmentTrackingInfo()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SetShipmentTrackingInfo.xml');
        $responses = $this->merchantData->setShipmentTrackingInfo($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\SetShipmentTrackingInfoResponseType', $response);
        }
    }

    public function testSoldReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SoldReport.xml');
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\SoldReportResponseType', $this->merchantData->soldReport($xml));
    }

    public function testUploadSiteHostedPictures()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/UploadSiteHostedPictures.xml');
        $responses = $this->merchantData->uploadSiteHostedPictures($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\UploadSiteHostedPicturesResponseType', $response);
        }
    }

    public function testVerifyAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddFixedPriceItem.xml');
        $responses = $this->merchantData->verifyAddFixedPriceItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType', $response);
        }
    }

    public function testVerifyAddItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddItem.xml');
        $responses = $this->merchantData->verifyAddItem($xml);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddItemResponseType', $response);
        }
    }

    protected function setUp(): void
    {
        $this->merchantData = new MerchantData();
    }
}
