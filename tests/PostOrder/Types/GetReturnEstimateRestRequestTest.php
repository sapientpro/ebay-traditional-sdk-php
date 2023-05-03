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

use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnEstimateRestRequest;
use PHPUnit\Framework\TestCase;

class GetReturnEstimateRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnEstimateRestRequest', $this->obj);
    }

    public function testExtendsGetEstimateRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetEstimateRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetReturnEstimateRestRequest();
    }
}
