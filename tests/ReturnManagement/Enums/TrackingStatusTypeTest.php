<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ReturnManagement\Enums;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\TrackingStatusType;
use PHPUnit\Framework\TestCase;

class TrackingStatusTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\TrackingStatusType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new TrackingStatusType();
    }
}
