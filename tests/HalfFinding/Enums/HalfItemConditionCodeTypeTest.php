<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\HalfFinding\Enums;

use SapientPro\EbayTraditionalSDK\HalfFinding\Enums\HalfItemConditionCodeType;
use PHPUnit\Framework\TestCase;

class HalfItemConditionCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\HalfFinding\Enums\HalfItemConditionCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new HalfItemConditionCodeType();
    }
}
