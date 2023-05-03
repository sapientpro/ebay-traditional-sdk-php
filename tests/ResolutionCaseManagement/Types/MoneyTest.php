<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\Money', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\DecimalType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new Money();
    }
}
