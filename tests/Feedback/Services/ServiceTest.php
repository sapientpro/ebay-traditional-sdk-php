<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Feedback\Services;

use SapientPro\EbayTraditionalSDK\Feedback\Services\FeedbackBaseService;
use SapientPro\EbayTraditionalSDK\Feedback\Services\FeedbackService;
use SapientPro\EbayTraditionalSDK\Tests\Feedback\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = FeedbackBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'default' => FeedbackService::API_VERSION,
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid'    => ['string'],
            'required' => true,
        ], $d['authToken']);
    }

    public function testEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'authToken'   => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h,
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(FeedbackBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[FeedbackBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(FeedbackBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[FeedbackBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(FeedbackBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(FeedbackService::API_VERSION, $h->headers[FeedbackBaseService::HDR_API_VERSION]);
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

        $this->assertArrayHasKey(FeedbackBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[FeedbackBaseService::HDR_API_VERSION]);
    }
}
