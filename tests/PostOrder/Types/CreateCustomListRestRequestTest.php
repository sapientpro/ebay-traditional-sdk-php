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

use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRestRequest;
use PHPUnit\Framework\TestCase;

class CreateCustomListRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRestRequest', $this->obj);
    }

    public function testExtendsCreateCustomListRequest()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRequest', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new CreateCustomListRestRequest();
    }
}
