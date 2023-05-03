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

use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse;
use PHPUnit\Framework\TestCase;

class GetCompatibilitySearchValuesBulkResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse', $this->obj);
    }

    public function testExtendsGetProductSearchValuesResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetCompatibilitySearchValuesBulkResponse();
    }
}