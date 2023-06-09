<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIDentificationRestRequest;
use PHPUnit\Framework\TestCase;

class UpdateCampaignIDentificationRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIDentificationRestRequest', $this->obj);
    }

    public function testExtendsUpdateCampaignIdentificationRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIdentificationRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new UpdateCampaignIDentificationRestRequest();
    }
}
