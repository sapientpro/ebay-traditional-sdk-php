<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Product\Types;

use SapientPro\EbayTraditionalSDK\Product\Types\FindCompatibilitiesBySpecificationResponse;
use PHPUnit\Framework\TestCase;

class FindCompatibilitiesBySpecificationResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Product\Types\FindCompatibilitiesBySpecificationResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Product\Types\BaseServiceResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new FindCompatibilitiesBySpecificationResponse();
    }
}
