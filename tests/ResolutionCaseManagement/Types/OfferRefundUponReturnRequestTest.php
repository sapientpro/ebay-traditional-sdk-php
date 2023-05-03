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

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest;
use PHPUnit\Framework\TestCase;

class OfferRefundUponReturnRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new OfferRefundUponReturnRequest();
    }
}
