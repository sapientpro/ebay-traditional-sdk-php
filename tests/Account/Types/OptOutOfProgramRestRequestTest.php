<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Account\Types;

use SapientPro\EbayTraditionalSDK\Account\Types\OptOutOfProgramRestRequest;
use PHPUnit\Framework\TestCase;

class OptOutOfProgramRestRequestTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\OptOutOfProgramRestRequest', $this->obj);
    }

    public function testExtendsProgram()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Account\Types\Program', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new OptOutOfProgramRestRequest();
    }
}