<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Finding\Types;

use SapientPro\EbayTraditionalSDK\Finding\Types\BestMatchFindingServiceRequest;
use PHPUnit\Framework\TestCase;

class BestMatchFindingServiceRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Finding\Types\BestMatchFindingServiceRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Finding\Types\BaseServiceRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new BestMatchFindingServiceRequest();
    }
}
