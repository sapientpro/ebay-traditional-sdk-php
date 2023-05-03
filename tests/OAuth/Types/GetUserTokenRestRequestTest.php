<?php

namespace SapientPro\EbayTraditionalSDK\Tests\OAuth\Types;

use SapientPro\EbayTraditionalSDK\OAuth\Types\GetUserTokenRestRequest;
use PHPUnit\Framework\TestCase;

class GetUserTokenRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\OAuth\Types\GetUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->code = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->code);
    }

    protected function setUp(): void
    {
        $this->obj = new GetUserTokenRestRequest();
    }
}
