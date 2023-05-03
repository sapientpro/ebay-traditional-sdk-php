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

use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest;
use PHPUnit\Framework\TestCase;

class GetCompatibilitySearchValuesRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetCompatibilitySearchValuesRequest();
    }
}