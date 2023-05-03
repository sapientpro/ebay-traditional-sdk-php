<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Types\RepeatableType;
use PHPUnit\Framework\TestCase;

class RepeatableTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\RepeatableType', $this->obj);
    }

    public function testExtendsArrayAccess()
    {
        $this->assertInstanceOf('\ArrayAccess', $this->obj);
    }

    public function testExtendsIterator()
    {
        $this->assertInstanceOf('\Iterator', $this->obj);
    }

    public function testExtendsCountable()
    {
        $this->assertInstanceOf('\Countable', $this->obj);
    }

    public function testArray()
    {
        $this->assertEquals(0, count($this->obj));

        $this->obj[] = 'one';
        $this->assertEquals(1, count($this->obj));
        $this->assertEquals('one', $this->obj[0]);

        $this->obj[] = 'two';
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals('two', $this->obj[1]);

        $this->assertEquals(null, $this->obj[10]);
        $this->obj[10] = 'three';
        $this->assertEquals(3, count($this->obj));
        $this->assertEquals('three', $this->obj[10]);

        unset($this->obj[10]);
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals(null, $this->obj[10]);

        $index = 0;
        foreach ($this->obj as $key => $value) {
            $this->assertEquals($index, $key);
            $this->assertEquals($this->obj[$index], $value);
            $index++;
        }
    }

    public function testSettingInvalidType()
    {
        $this->expectException('\SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for . Expected string but got integer');

        $this->obj[] = 123;
    }

    protected function setUp(): void
    {
        $this->obj = new RepeatableType('', '', 'string');
    }
}
