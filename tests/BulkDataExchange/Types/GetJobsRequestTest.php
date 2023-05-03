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

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobsRequest;
use PHPUnit\Framework\TestCase;

class GetJobsRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobsRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetJobsRequest();
    }
}
