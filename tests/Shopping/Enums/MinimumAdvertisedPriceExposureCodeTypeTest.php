<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Shopping\Enums;

use SapientPro\EbayTraditionalSDK\Shopping\Enums\MinimumAdvertisedPriceExposureCodeType;
use PHPUnit\Framework\TestCase;

class MinimumAdvertisedPriceExposureCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Shopping\Enums\MinimumAdvertisedPriceExposureCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new MinimumAdvertisedPriceExposureCodeType();
    }
}
