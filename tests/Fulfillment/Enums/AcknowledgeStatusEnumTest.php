<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Fulfillment\Enums;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\AcknowledgeStatusEnum;
use PHPUnit\Framework\TestCase;

class AcknowledgeStatusEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Fulfillment\Enums\AcknowledgeStatusEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new AcknowledgeStatusEnum();
    }
}