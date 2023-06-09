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

use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAllCampaignsRestResponse;
use PHPUnit\Framework\TestCase;

class GetAllCampaignsRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAllCampaignsRestResponse', $this->obj);
    }

    public function testExtendsCampaignPagedCollection()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Marketing\Types\CampaignPagedCollection', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetAllCampaignsRestResponse();
    }
}
