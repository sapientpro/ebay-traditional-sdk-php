<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\BusinessPoliciesManagement\Enums;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\ConsolidationJobType;
use PHPUnit\Framework\TestCase;

class ConsolidationJobTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\ConsolidationJobType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ConsolidationJobType();
    }
}
