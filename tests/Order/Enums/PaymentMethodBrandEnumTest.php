<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Order\Enums;

use SapientPro\EbayTraditionalSDK\Order\Enums\PaymentMethodBrandEnum;
use PHPUnit\Framework\TestCase;

class PaymentMethodBrandEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Enums\PaymentMethodBrandEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PaymentMethodBrandEnum();
    }
}
