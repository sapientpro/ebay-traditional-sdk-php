<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType;
use PHPUnit\Framework\TestCase;

class MeasureTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\MeasureType', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\DecimalType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new MeasureType();
    }
}
