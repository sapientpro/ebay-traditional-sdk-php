<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SapientPro\EbayTraditionalSDK\Tests\BulkDataExchange\Enums;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Enums\JobStatus;
use PHPUnit\Framework\TestCase;

class JobStatusTest extends TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\BulkDataExchange\Enums\JobStatus', $this->obj);
    }

    protected function setUp(): void
    {
        $this->obj = new JobStatus();
    }
}
