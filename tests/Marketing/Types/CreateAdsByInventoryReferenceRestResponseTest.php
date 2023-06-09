<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse;
use PHPUnit\Framework\TestCase;

class CreateAdsByInventoryReferenceRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAdReferences()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\AdReferences', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CreateAdsByInventoryReferenceRestResponse();
    }
}
