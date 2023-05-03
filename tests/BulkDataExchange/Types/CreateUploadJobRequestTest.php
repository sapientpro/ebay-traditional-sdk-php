<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\BulkDataExchange\Types;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateUploadJobRequest;
use PHPUnit\Framework\TestCase;

class CreateUploadJobRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateUploadJobRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CreateUploadJobRequest();
    }
}