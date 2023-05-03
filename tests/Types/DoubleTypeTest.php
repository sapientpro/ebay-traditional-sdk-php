<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Types\DoubleType;
use PHPUnit\Framework\TestCase;

class DoubleTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\DoubleType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertisFloat($this->obj->value);
    }

    protected function setUp(): void
    {
        $this->obj = new DoubleType();
    }
}
