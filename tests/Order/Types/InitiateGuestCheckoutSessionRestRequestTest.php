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

use SapientPro\EbayTraditionalSDK\Order\Types\InitiateGuestCheckoutSessionRestRequest;
use PHPUnit\Framework\TestCase;

class InitiateGuestCheckoutSessionRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\InitiateGuestCheckoutSessionRestRequest', $this->obj);
    }

    public function testExtendsCreateGuestCheckoutSessionRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Order\Types\CreateGuestCheckoutSessionRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new InitiateGuestCheckoutSessionRestRequest();
    }
}
