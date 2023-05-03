<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Merchandising\Types;

use SapientPro\EbayTraditionalSDK\Merchandising\Types\ErrorParameter;
use PHPUnit\Framework\TestCase;

class ErrorParameterTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Merchandising\Types\ErrorParameter', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\StringType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ErrorParameter();
    }
}
