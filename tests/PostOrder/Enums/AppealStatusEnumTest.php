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

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\AppealStatusEnum;
use PHPUnit\Framework\TestCase;

class AppealStatusEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Enums\AppealStatusEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new AppealStatusEnum();
    }
}
