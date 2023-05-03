<?php

namespace SapientPro\EbayTraditionalSDK\Test;

use SapientPro\EbayTraditionalSDK\Tests\Mocks\StatusCode;
use PHPUnit\Framework\TestCase;

class StatusCodeTraitTest extends TestCase
{
    public function testCanSetStatusCode()
    {
        $s = new StatusCode(200);

        $this->assertEquals(200, $s->getStatusCode());
    }
}
