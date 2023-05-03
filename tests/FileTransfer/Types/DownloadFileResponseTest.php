<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\FileTransfer\Types;

use SapientPro\EbayTraditionalSDK\FileTransfer\Types\DownloadFileResponse;
use PHPUnit\Framework\TestCase;

class DownloadFileResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\FileTransfer\Types\DownloadFileResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\FileTransfer\Types\BaseServiceResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new DownloadFileResponse();
    }
}
