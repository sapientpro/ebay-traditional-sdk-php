<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Shopping\Types;

use SapientPro\EbayTraditionalSDK\Shopping\Types\FindHalfProductsResponseType;
use PHPUnit\Framework\TestCase;

class FindHalfProductsResponseTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Shopping\Types\FindHalfProductsResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Shopping\Types\AbstractResponseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new FindHalfProductsResponseType();
    }
}
