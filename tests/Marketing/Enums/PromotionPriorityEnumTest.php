<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Marketing\Enums;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\PromotionPriorityEnum;
use PHPUnit\Framework\TestCase;

class PromotionPriorityEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Enums\PromotionPriorityEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PromotionPriorityEnum();
    }
}
