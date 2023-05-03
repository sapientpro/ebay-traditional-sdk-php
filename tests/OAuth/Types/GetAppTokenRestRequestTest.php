<?php

namespace SapientPro\EbayTraditionalSDK\Tests\OAuth\Types;

use SapientPro\EbayTraditionalSDK\OAuth\Types\GetAppTokenRestRequest;
use PHPUnit\Framework\TestCase;

class GetAppTokenRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\OAuth\Types\GetAppTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->scope = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->scope);
    }

    protected function setUp(): void
    {
        $this->obj = new GetAppTokenRestRequest();
    }
}
