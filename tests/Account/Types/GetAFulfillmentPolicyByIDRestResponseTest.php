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

use SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse;
use PHPUnit\Framework\TestCase;

class GetAFulfillmentPolicyByIDRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsFulfillmentPolicy()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\FulfillmentPolicy', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetAFulfillmentPolicyByIDRestResponse();
    }
}