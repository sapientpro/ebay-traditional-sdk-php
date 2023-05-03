<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Types\ErrorDetailV3;
use PHPUnit\Framework\TestCase;

class ErrorDetailV3Test extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Browse\Types\ErrorDetailV3', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ErrorDetailV3();
    }
}
