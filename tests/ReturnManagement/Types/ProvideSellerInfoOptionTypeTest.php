<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ReturnManagement\Types;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideSellerInfoOptionType;
use PHPUnit\Framework\TestCase;

class ProvideSellerInfoOptionTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideSellerInfoOptionType', $this->obj);
    }

    public function testExtendsBaseActivityOptionType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\BaseActivityOptionType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ProvideSellerInfoOptionType();
    }
}
