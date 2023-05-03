<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Types\IntegerType;
use PHPUnit\Framework\TestCase;

class IntegerTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\IntegerType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertisInt($this->obj->value);
    }

    protected function setUp(): void
    {
        $this->obj = new IntegerType();
    }
}
