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

use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestRequest;
use PHPUnit\Framework\TestCase;

class BulkUpdateAdBidsByListingIDRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestRequest', $this->obj);
    }

    public function testExtendsBulkCreateAdRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new BulkUpdateAdBidsByListingIDRestRequest();
    }
}
