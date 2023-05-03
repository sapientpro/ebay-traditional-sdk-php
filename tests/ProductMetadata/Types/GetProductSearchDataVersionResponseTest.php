<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ProductMetadata\Types;

use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchDataVersionResponse;
use PHPUnit\Framework\TestCase;

class GetProductSearchDataVersionResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchDataVersionResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\BaseServiceResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetProductSearchDataVersionResponse();
    }
}
