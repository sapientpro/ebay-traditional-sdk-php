<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\ResolutionCaseManagement\Enums;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\MoneyMovementType;
use PHPUnit\Framework\TestCase;

class MoneyMovementTypeTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\MoneyMovementType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new MoneyMovementType();
    }
}
