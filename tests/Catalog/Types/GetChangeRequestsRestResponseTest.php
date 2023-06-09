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

use SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsRestResponse;
use PHPUnit\Framework\TestCase;

class GetChangeRequestsRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsRestResponse', $this->obj);
    }

    public function testExtendsGetChangeRequestsResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetChangeRequestsRestResponse();
    }
}
