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

use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse;
use PHPUnit\Framework\TestCase;

class GetAdsByInventoryReferenceRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAds()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\Ads', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetAdsByInventoryReferenceRestResponse();
    }
}