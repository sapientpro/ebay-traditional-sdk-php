<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\BusinessPoliciesManagement\Enums;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\AckValue;
use PHPUnit\Framework\TestCase;

class AckValueTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\AckValue', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new AckValue();
    }
}
