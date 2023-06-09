<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductRestResponse;
use PHPUnit\Framework\TestCase;

class GetProductRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductRestResponse', $this->obj);
    }

    public function testExtendsProduct()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Catalog\Types\Product', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetProductRestResponse();
    }
}
