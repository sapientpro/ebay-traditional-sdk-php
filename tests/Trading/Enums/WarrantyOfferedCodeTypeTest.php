<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Enums;

use SapientPro\EbayTraditionalSDK\Trading\Enums\WarrantyOfferedCodeType;
use PHPUnit\Framework\TestCase;

class WarrantyOfferedCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Enums\WarrantyOfferedCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new WarrantyOfferedCodeType();
    }
}