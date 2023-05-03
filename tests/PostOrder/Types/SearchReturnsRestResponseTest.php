<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchReturnsRestResponse;
use PHPUnit\Framework\TestCase;

class SearchReturnsRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchReturnsRestResponse', $this->obj);
    }

    public function testExtendsGetSummaryResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetSummaryResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new SearchReturnsRestResponse();
    }
}
