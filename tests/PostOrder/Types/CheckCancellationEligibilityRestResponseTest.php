<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckCancellationEligibilityRestResponse;
use PHPUnit\Framework\TestCase;

class CheckCancellationEligibilityRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckCancellationEligibilityRestResponse', $this->obj);
    }

    public function testExtendsOrderEligibilityResult()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\OrderEligibilityResult', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CheckCancellationEligibilityRestResponse();
    }
}
