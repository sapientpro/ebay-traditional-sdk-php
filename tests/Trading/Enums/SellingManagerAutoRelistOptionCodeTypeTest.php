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

use SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType;
use PHPUnit\Framework\TestCase;

class SellingManagerAutoRelistOptionCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new SellingManagerAutoRelistOptionCodeType();
    }
}
