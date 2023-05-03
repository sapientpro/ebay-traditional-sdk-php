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

use SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackRequirementsType;
use PHPUnit\Framework\TestCase;

class FeedbackRequirementsTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\BooleanType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new FeedbackRequirementsType();
    }
}