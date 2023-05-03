<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Metadata\Services;

use SapientPro\EbayTraditionalSDK\Metadata\Services\MetadataBaseService;
use SapientPro\EbayTraditionalSDK\Metadata\Services\MetadataService;
use SapientPro\EbayTraditionalSDK\Tests\Metadata\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpRestHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = MetadataBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'default'  => MetadataService::API_VERSION,
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
        $this->assertArrayHasKey(MetadataBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[MetadataBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(MetadataBaseService::HDR_MARKETPLACE_ID, $h->headers);
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

        $this->assertArrayHasKey(MetadataBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[MetadataBaseService::HDR_MARKETPLACE_ID]);
    }
}
