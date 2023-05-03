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

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse;
use PHPUnit\Framework\TestCase;

class UpdateBundleStatusResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new UpdateBundleStatusResponse();
    }
}
