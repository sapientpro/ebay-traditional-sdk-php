<?php

namespace SapientPro\EbayTraditionalSDK\Tests\BulkDataExchange\Services;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Services\BulkDataExchangeBaseService;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Services\BulkDataExchangeService;
use SapientPro\EbayTraditionalSDK\Tests\BulkDataExchange\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = BulkDataExchangeBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'default' => BulkDataExchangeService::API_VERSION,
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'required' => true,
        ], $d['authToken']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'authToken'   => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h,
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(BulkDataExchangeBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[BulkDataExchangeBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(BulkDataExchangeBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[BulkDataExchangeBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(BulkDataExchangeService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(BulkDataExchangeService::API_VERSION, $h->headers[BulkDataExchangeBaseService::HDR_API_VERSION]);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'apiVersion'  => '123',
            'authToken'   => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h,
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(BulkDataExchangeBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[BulkDataExchangeBaseService::HDR_API_VERSION]);
    }
}
