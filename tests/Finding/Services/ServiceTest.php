<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Finding\Services;

use SapientPro\EbayTraditionalSDK\Finding\Services\FindingBaseService;
use SapientPro\EbayTraditionalSDK\Finding\Services\FindingService;
use SapientPro\EbayTraditionalSDK\Tests\Finding\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = FindingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'default' => FindingService::API_VERSION,
        ], $d['apiVersion']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string'],
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'credentials' => ['appId' => '321', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h,
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(FindingBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('321', $h->headers[FindingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(FindingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[FindingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(FindingService::API_VERSION, $h->headers[FindingBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'apiVersion'  => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId'    => '999',
            'httpHandler' => $h,
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[FindingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[FindingBaseService::HDR_GLOBAL_ID]);
    }
}
