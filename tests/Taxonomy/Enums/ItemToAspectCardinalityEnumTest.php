<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Taxonomy\Enums;

use SapientPro\EbayTraditionalSDK\Taxonomy\Enums\ItemToAspectCardinalityEnum;
use PHPUnit\Framework\TestCase;

class ItemToAspectCardinalityEnumTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Taxonomy\Enums\ItemToAspectCardinalityEnum', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new ItemToAspectCardinalityEnum();
    }
}