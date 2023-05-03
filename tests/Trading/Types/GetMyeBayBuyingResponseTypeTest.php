<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayBuyingResponseType;
use PHPUnit\Framework\TestCase;

class GetMyeBayBuyingResponseTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayBuyingResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\AbstractResponseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetMyeBayBuyingResponseType();
    }
}