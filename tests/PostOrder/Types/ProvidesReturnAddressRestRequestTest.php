<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvidesReturnAddressRestRequest;
use PHPUnit\Framework\TestCase;

class ProvidesReturnAddressRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvidesReturnAddressRestRequest', $this->obj);
    }

    public function testExtendsReturnAddressRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ProvidesReturnAddressRestRequest();
    }
}
