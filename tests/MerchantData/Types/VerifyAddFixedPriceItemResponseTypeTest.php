<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType;
use PHPUnit\Framework\TestCase;

class VerifyAddFixedPriceItemResponseTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new VerifyAddFixedPriceItemResponseType();
    }
}
