<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\PostOrder\Enums;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\CancelActivityTypeEnum;
use PHPUnit\Framework\TestCase;

class CancelActivityTypeEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Enums\CancelActivityTypeEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CancelActivityTypeEnum();
    }
}