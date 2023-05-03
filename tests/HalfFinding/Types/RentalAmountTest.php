<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\HalfFinding\Types;

use SapientPro\EbayTraditionalSDK\HalfFinding\Types\RentalAmount;
use PHPUnit\Framework\TestCase;

class RentalAmountTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\HalfFinding\Types\RentalAmount', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\DoubleType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new RentalAmount();
    }
}
