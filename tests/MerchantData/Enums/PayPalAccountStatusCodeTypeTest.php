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

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PayPalAccountStatusCodeType;
use PHPUnit\Framework\TestCase;

class PayPalAccountStatusCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Enums\PayPalAccountStatusCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PayPalAccountStatusCodeType();
    }
}