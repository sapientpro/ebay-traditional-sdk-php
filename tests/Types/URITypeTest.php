<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Types\URIType;
use PHPUnit\Framework\TestCase;

class URITypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\URIType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertisString($this->obj->value);
    }

    protected function setUp(): void
    {
        $this->obj = new URIType();
    }
}
