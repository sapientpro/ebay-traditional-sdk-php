<?php

namespace SapientPro\EbayTraditionalSDK\Types\Test;

use DateTime;
use DateTimeZone;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\AmountClass;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\Base64BinaryType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\BooleanType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\DecimalType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\DoubleType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\IntegerType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\SimpleClass;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\StringType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\TokenType;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\URIType;
use PHPUnit\Framework\TestCase;

class ToArrayTest extends TestCase
{
    private $obj;

    public function testToArrayExists()
    {
        $this->assertEquals(true, is_array($this->obj->toArray()));
    }

    public function testToArray()
    {
        $array = [
            'integer'          => 123,
            'string'           => 'foo',
            'double'           => 123.45,
            'booleanTrue'      => true,
            'booleanFalse'     => false,
            'DateTime'         => '2000-01-01T00:00:00.000Z',
            'strings'          => ['foo', 'bar'],
            'integers'         => [111, 222],
            'AmountClass'      => [
                'value'        => 543.21,
                'AttributeOne' => 'one',
            ],
            'SimpleClass'      => [
                'integer'      => 123,
                'string'       => 'foo',
                'double'       => 123.45,
                'booleanTrue'  => true,
                'booleanFalse' => false,
                'DateTime'     => '2000-01-01T00:00:00.000Z',
                'integers'     => [100, 200, 300],
            ],
            'simpleClasses'    => [
                [
                    'integer'      => 321,
                    'string'       => 'bar',
                    'double'       => 5432.10,
                    'booleanTrue'  => true,
                    'booleanFalse' => false,
                    'DateTime'     => '2015-01-01T00:00:00.000Z',
                ],
                [
                    'integers' => [300, 200, 100],
                    'strings'  => ['foo', 'bar'],
                ],
                [],
            ],
            'base64BinaryType' => [],
            'booleanType'      => [],
            'decimalType'      => [],
            'doubleType'       => [],
            'integerType'      => [],
            'stringType'       => [],
            'tokenType'        => [],
            'uriType'          => [],
        ];

        $this->obj->integer = 123;
        $this->obj->string = 'foo';
        $this->obj->double = 123.45;
        $this->obj->booleanTrue = true;
        $this->obj->booleanFalse = false;
        $this->obj->DateTime = new DateTime('2000-01-01', new DateTimeZone('UTC'));
        $this->obj->strings = ['foo', 'bar'];
        $this->obj->integers = [111, 222];
        $this->obj->AmountClass = new Amountclass([
            'value'        => 543.21,
            'AttributeOne' => 'one',
        ]);
        $this->obj->SimpleClass = new SimpleClass([
            'integer'      => 123,
            'string'       => 'foo',
            'double'       => 123.45,
            'booleanTrue'  => true,
            'booleanFalse' => false,
            'DateTime'     => new DateTime('2000-01-01', new DateTimeZone('UTC')),
            'integers'     => [100, 200, 300],
        ]);
        $this->obj->simpleClasses = [
            new SimpleClass([
                'integer'      => 321,
                'string'       => 'bar',
                'double'       => 5432.10,
                'booleanTrue'  => true,
                'booleanFalse' => false,
                'DateTime'     => new DateTime('2015-01-01', new DateTimeZone('UTC')),
            ]),
            new SimpleClass([
                'integers' => [300, 200, 100],
                'strings'  => ['foo', 'bar'],
            ]),
            new SimpleClass(),
        ];
        $this->obj->base64BinaryType = new Base64BinaryType();
        $this->obj->booleanType = new BooleanType();
        $this->obj->decimalType = new DecimalType();
        $this->obj->doubleType = new DoubleType();
        $this->obj->integerType = new IntegerType();
        $this->obj->stringType = new StringType();
        $this->obj->tokenType = new TokenType();
        $this->obj->uriType = new URIType();

        $this->assertEquals($array, $this->obj->toArray());
    }

    protected function setUp(): void
    {
        $this->obj = new ComplexClass();
    }
}
