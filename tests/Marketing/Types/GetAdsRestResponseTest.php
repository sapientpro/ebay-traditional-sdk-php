<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsRestResponse;
use PHPUnit\Framework\TestCase;

class GetAdsRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsRestResponse', $this->obj);
    }

    public function testExtendsAdPagedCollection()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\AdPagedCollection', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetAdsRestResponse();
    }
}
