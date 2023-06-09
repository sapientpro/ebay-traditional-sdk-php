<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\Taxonomy\Types;

use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse;
use PHPUnit\Framework\TestCase;

class GetSuggestedCategoriesRestResponseTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse', $this->obj);
    }

    public function testExtendsCategorySuggestionResponse()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Taxonomy\Types\CategorySuggestionResponse', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new GetSuggestedCategoriesRestResponse();
    }
}
