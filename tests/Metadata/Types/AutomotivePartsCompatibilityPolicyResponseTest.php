<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Metadata\Types;

use SapientPro\EbayTraditionalSDK\Metadata\Types\AutomotivePartsCompatibilityPolicyResponse;
use PHPUnit\Framework\TestCase;

class AutomotivePartsCompatibilityPolicyResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Metadata\Types\AutomotivePartsCompatibilityPolicyResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new AutomotivePartsCompatibilityPolicyResponse();
    }
}
