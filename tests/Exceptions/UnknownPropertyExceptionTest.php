<?php

namespace SapientPro\EbayTraditionalSDK\Exceptions\Test;

use SapientPro\EbayTraditionalSDK\Exceptions\UnknownPropertyException;
use PHPUnit\Framework\TestCase;

class UnknownPropertyExceptionTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Exceptions\UnknownPropertyException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Unknown property foo', $this->obj->getMessage());
    }

    protected function setUp(): void
    {
        $this->obj = new UnknownPropertyException('foo');
    }
}
