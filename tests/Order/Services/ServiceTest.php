<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Order\Services;

use SapientPro\EbayTraditionalSDK\Order\Services\OrderBaseService;
use SapientPro\EbayTraditionalSDK\Order\Services\OrderService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpRestHandler;
use SapientPro\EbayTraditionalSDK\Tests\Order\Mocks\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = OrderBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'default'  => OrderService::API_VERSION,
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

        $this->assertArrayHasKey('riskCorrelationId', $d);
        $this->assertEquals([
            'valid' => ['string'],
        ], $d['riskCorrelationId']);
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
        $this->assertArrayHasKey(OrderBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[OrderBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(OrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertArrayNotHasKey(OrderBaseService::HDR_END_USER_CTX, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization'     => '321',
            'marketplaceId'     => '123',
            'riskCorrelationId' => '456',
            'httpHandler'       => $h,
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(OrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[OrderBaseService::HDR_MARKETPLACE_ID]);
        $this->assertEquals('deviceId=456', $h->headers[OrderBaseService::HDR_END_USER_CTX]);
    }
}
