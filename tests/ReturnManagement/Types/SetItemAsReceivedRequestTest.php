<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ReturnManagement\Types;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\SetItemAsReceivedRequest;
use PHPUnit\Framework\TestCase;

class SetItemAsReceivedRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\SetItemAsReceivedRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\BaseRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new SetItemAsReceivedRequest();
    }
}
