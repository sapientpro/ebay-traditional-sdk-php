<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Shopping\Enums;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\SellerLevelCodeType;
use PHPUnit\Framework\TestCase;

class SellerLevelCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Shopping\Enums\SellerLevelCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new SellerLevelCodeType();
    }
}