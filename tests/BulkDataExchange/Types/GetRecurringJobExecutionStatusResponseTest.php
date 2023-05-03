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

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse;
use PHPUnit\Framework\TestCase;

class GetRecurringJobExecutionStatusResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetRecurringJobExecutionStatusResponse();
    }
}