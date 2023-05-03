<?php

namespace SapientPro\EbayTraditionalSDK\Tests\FileTransfer\Services;

use SapientPro\EbayTraditionalSDK\FileTransfer\Services\FileTransferBaseService;
use SapientPro\EbayTraditionalSDK\FileTransfer\Services\FileTransferService;
use SapientPro\EbayTraditionalSDK\Tests\FileTransfer\Mocks\Service;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHandler;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testConfigDefinitions()
    {
        $d = FileTransferBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'default' => FileTransferService::API_VERSION,
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
        $this->assertArrayHasKey(FileTransferBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[FileTransferBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(FileTransferBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[FileTransferBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(FileTransferBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(FileTransferService::API_VERSION, $h->headers[FileTransferBaseService::HDR_API_VERSION]);
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

        $this->assertArrayHasKey(FileTransferBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[FileTransferBaseService::HDR_API_VERSION]);
    }
}
