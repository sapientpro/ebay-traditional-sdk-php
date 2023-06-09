<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse;
use PHPUnit\Framework\TestCase;

class GetPaymentPoliciesByMarketplaceRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse', $this->obj);
    }

    public function testExtendsPaymentPolicyResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\PaymentPolicyResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetPaymentPoliciesByMarketplaceRestResponse();
    }
}
