<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\MerchantData\Enums;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\PromotionSchemeCodeType;
use PHPUnit\Framework\TestCase;

class PromotionSchemeCodeTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\MerchantData\Enums\PromotionSchemeCodeType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new PromotionSchemeCodeType();
    }
}
