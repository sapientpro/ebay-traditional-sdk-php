<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use SapientPro\EbayTraditionalSDK\Tests\Mocks\AmountClass;
use PHPUnit\Framework\TestCase;

class AmountClassTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Tests\Mocks\AmountClass', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\DoubleType', $this->obj);
    }

    public function testToXml()
    {
        $this->obj->value = 123.45;
        $this->obj->AttributeOne = 'one';
        $this->obj->AttributeTwo = 'two';

        $this->assertXmlStringEqualsXmlFile(__DIR__.'/../Mocks/AmountClassXml.xml', $this->obj->toRequestXml());
    }

    protected function setUp(): void
    {
        $this->obj = new AmountClass();
    }
}
