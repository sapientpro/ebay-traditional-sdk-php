<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\RelatedItemsManagement\Types;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\BaseRequest;
use PHPUnit\Framework\TestCase;

class BaseRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\BaseRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BaseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new BaseRequest();
    }
}
