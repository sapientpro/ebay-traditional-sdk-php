<?php

namespace SapientPro\EbayTraditionalSDK\Test;

use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHeaders;
use PHPUnit\Framework\TestCase;

class HttpHeadersTraitTest extends TestCase
{
    public function testNoHeaders()
    {
        $h = new HttpHeaders([]);

        $this->assertEquals([], $h->getHeaders());
    }

    public function testReturnsHeaders()
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo',
        ]);

        $this->assertEquals([
            'foo' => ['foo'],
            'Bar' => ['bar', 'foo'],
        ], $h->getHeaders());
    }

    public function testReturnAHeader()
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo',
        ]);

        $this->assertEquals(['foo'], $h->getHeader('FOO'));
        $this->assertEquals(['bar', 'foo'], $h->getHeader('bAR'));
    }

    public function testHasHeader()
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo',
        ]);

        $this->assertEquals(true, $h->hasHeader('FOO'));
        $this->assertEquals(true, $h->hasHeader('bAR'));
    }

    public function testGetHeaderLine()
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo',
        ]);

        $this->assertEquals('foo', $h->getHeaderLine('FOO'));
        $this->assertEquals('bar, foo', $h->getHeaderLine('bAR'));
    }
}
