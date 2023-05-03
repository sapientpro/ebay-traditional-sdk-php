<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Finding\Types;

use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsAdvancedResponse;
use PHPUnit\Framework\TestCase;

class FindItemsAdvancedResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsAdvancedResponse', $this->obj);
    }

    public function testExtendsBaseFindingServiceResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Finding\Types\BaseFindingServiceResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new FindItemsAdvancedResponse();
    }
}