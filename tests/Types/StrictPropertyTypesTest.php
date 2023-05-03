<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException;
use SapientPro\EbayTraditionalSDK\Sdk;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;
use PHPUnit\Framework\TestCase;

class StrictPropertyTypesTest extends TestCase
{
    private $obj;

    public function testSettingPropertyWithAnInvalidTypeAllowed()
    {
        $this->obj->integer = 'foo';
        $this->obj->string = 123;
        $this->obj->double = 'foo';
        $this->obj->booleanTrue = 'foo';
        $this->obj->DateTime = 'foo';
        $this->obj->integers[] = 'foo';
        $this->obj->strings[] = 123;

        $this->assertEquals('foo', $this->obj->integer);
        $this->assertEquals(123, $this->obj->string);
        $this->assertEquals('foo', $this->obj->double);
        $this->assertEquals('foo', $this->obj->booleanTrue);
        $this->assertEquals('foo', $this->obj->DateTime);
        $this->assertEquals('foo', $this->obj->integers[0]);
        $this->assertEquals(123, $this->obj->strings[0]);
    }

    public function testSettingComplexPropertiesThrows()
    {
        $this->expectException(InvalidPropertyTypeException::class);

        $this->obj->SimpleClass = 'foo';
    }

    public function testSettingComplexRepeatablePropertiesThrows()
    {
        $this->expectException(InvalidPropertyTypeException::class);

        $this->obj->simpleClasses[] = 'foo';
    }

    protected function setUp(): void
    {
        Sdk::$STRICT_PROPERTY_TYPES = false;
        $this->obj = new ComplexClass();
    }

    protected function tearDown(): void
    {
        Sdk::$STRICT_PROPERTY_TYPES = true;
    }
}
