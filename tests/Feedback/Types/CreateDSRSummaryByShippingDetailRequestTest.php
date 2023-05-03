<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Feedback\Types;

use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest;
use PHPUnit\Framework\TestCase;

class CreateDSRSummaryByShippingDetailRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Feedback\Types\BaseServiceRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CreateDSRSummaryByShippingDetailRequest();
    }
}