<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Metadata\Enums;

use SapientPro\EbayTraditionalSDK\Metadata\Enums\CountryCodeEnum;
use PHPUnit\Framework\TestCase;

class CountryCodeEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Metadata\Enums\CountryCodeEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CountryCodeEnum();
    }
}
