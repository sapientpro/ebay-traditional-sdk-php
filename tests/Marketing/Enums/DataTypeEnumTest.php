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

use SapientPro\EbayTraditionalSDK\Marketing\Enums\DataTypeEnum;
use PHPUnit\Framework\TestCase;

class DataTypeEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Enums\DataTypeEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new DataTypeEnum();
    }
}