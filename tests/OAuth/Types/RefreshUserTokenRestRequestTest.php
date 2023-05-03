<?php

namespace SapientPro\EbayTraditionalSDK\Tests\OAuth\Types;

use SapientPro\EbayTraditionalSDK\OAuth\Types\RefreshUserTokenRestRequest;
use PHPUnit\Framework\TestCase;

class RefreshUserTokenRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\OAuth\Types\RefreshUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->refresh_token = 'bar';
        $this->obj->scope = ['foo', 'bar', 'baz'];

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->refresh_token);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $this->obj->scope);
    }

    protected function setUp(): void
    {
        $this->obj = new RefreshUserTokenRestRequest();
    }
}
