<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Account\Enums;

use SapientPro\EbayTraditionalSDK\Account\Enums\ProgramTypeEnum;
use PHPUnit\Framework\TestCase;

class ProgramTypeEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Enums\ProgramTypeEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ProgramTypeEnum();
    }
}
