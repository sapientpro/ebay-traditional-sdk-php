<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Enums;

use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeStatusCodeType;
use PHPUnit\Framework\TestCase;

class DisputeStatusCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeStatusCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new DisputeStatusCodeType();
    }
}