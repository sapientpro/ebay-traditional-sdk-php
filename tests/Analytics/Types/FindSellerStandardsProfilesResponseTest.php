<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Analytics\Types;

use SapientPro\EbayTraditionalSDK\Analytics\Types\FindSellerStandardsProfilesResponse;
use PHPUnit\Framework\TestCase;

class FindSellerStandardsProfilesResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Analytics\Types\FindSellerStandardsProfilesResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new FindSellerStandardsProfilesResponse();
    }
}
