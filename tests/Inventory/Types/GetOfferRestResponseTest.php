<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Inventory\Types\GetOfferRestResponse;
use PHPUnit\Framework\TestCase;

class GetOfferRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Inventory\Types\GetOfferRestResponse', $this->obj);
    }

    public function testExtendsEbayOfferDetailsWithAll()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Inventory\Types\EbayOfferDetailsWithAll', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetOfferRestResponse();
    }
}
