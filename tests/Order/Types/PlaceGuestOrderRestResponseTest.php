<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Types\PlaceGuestOrderRestResponse;
use PHPUnit\Framework\TestCase;

class PlaceGuestOrderRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\PlaceGuestOrderRestResponse', $this->obj);
    }

    public function testExtendsPurchaseOrderSummary()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\PurchaseOrderSummary', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PlaceGuestOrderRestResponse();
    }
}
