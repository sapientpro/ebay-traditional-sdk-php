<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\MerchantData\Enums;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentTypeCodeType;
use PHPUnit\Framework\TestCase;

class PaymentTypeCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Enums\PaymentTypeCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PaymentTypeCodeType();
    }
}
