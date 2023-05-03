<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Types\GetCharitiesRequestType;
use PHPUnit\Framework\TestCase;

class GetCharitiesRequestTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\GetCharitiesRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\AbstractRequestType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetCharitiesRequestType();
    }
}
