<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Account\Enums;

use SapientPro\EbayTraditionalSDK\Account\Enums\ShippingCostTypeEnum;
use PHPUnit\Framework\TestCase;

class ShippingCostTypeEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Enums\ShippingCostTypeEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ShippingCostTypeEnum();
    }
}
