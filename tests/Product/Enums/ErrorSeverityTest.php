<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Product\Enums;

use SapientPro\EbayTraditionalSDK\Product\Enums\ErrorSeverity;
use PHPUnit\Framework\TestCase;

class ErrorSeverityTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Product\Enums\ErrorSeverity', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ErrorSeverity();
    }
}
