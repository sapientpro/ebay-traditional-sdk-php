<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Analytics\Services;

use SapientPro\EbayTraditionalSDK\Analytics\Services\AnalyticsBaseService;
use SapientPro\EbayTraditionalSDK\Analytics\Services\AnalyticsService;
use SapientPro\EbayTraditionalSDK\Tests\Analytics\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpRestHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = AnalyticsBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'default'  => AnalyticsService::API_VERSION,
            'required' => true,
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authorization', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'required' => true,
        ], $d['authorization']);

        $this->assertArrayHasKey('marketplaceId', $d);
        $this->assertEquals([
            'valid' => ['string'],
        ], $d['marketplaceId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'httpHandler'   => $h,
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(AnalyticsBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[AnalyticsBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(AnalyticsBaseService::HDR_MARKETPLACE_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'marketplaceId' => '123',
            'httpHandler'   => $h,
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(AnalyticsBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[AnalyticsBaseService::HDR_MARKETPLACE_ID]);
    }
}
