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

use SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentHoldReasonCodeType;
use PHPUnit\Framework\TestCase;

class PaymentHoldReasonCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentHoldReasonCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PaymentHoldReasonCodeType();
    }
}
