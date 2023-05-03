<?php

namespace SapientPro\EbayTraditionalSDK\Exceptions\Test;

use SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException;
use PHPUnit\Framework\TestCase;

class InvalidPropertyTypeExceptionTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Invalid property type provided for foo. Expected string but got integer', $this->obj->getMessage());
    }

    protected function setUp(): void
    {
        $this->obj = new InvalidPropertyTypeException('foo', 'string', 'integer');
    }
}
