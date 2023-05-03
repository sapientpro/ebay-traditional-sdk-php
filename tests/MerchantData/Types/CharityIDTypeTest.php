<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Types\CharityIDType;
use PHPUnit\Framework\TestCase;

class CharityIDTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\CharityIDType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\StringType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CharityIDType();
    }
}
