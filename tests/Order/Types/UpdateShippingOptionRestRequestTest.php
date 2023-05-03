<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Order\Types;

use SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOptionRestRequest;
use PHPUnit\Framework\TestCase;

class UpdateShippingOptionRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOptionRestRequest', $this->obj);
    }

    public function testExtendsUpdateShippingOption()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOption', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new UpdateShippingOptionRestRequest();
    }
}
