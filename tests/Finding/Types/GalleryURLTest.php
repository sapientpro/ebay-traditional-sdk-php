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

use SapientPro\EbayTraditionalSDK\Finding\Types\GalleryURL;
use PHPUnit\Framework\TestCase;

class GalleryURLTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Finding\Types\GalleryURL', $this->obj);
    }

    public function testExtendsURIType()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Types\URIType', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GalleryURL();
    }
}
