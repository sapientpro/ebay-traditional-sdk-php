<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\BusinessPoliciesManagement\Types;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveProfileResponse;
use PHPUnit\Framework\TestCase;

class RemoveProfileResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveProfileResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new RemoveProfileResponse();
    }
}