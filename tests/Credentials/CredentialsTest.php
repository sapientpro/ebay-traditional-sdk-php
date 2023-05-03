<?php

namespace SapientPro\EbayTraditionalSDK\Credentials\Test;

use SapientPro\EbayTraditionalSDK\Credentials\Credentials;
use PHPUnit\Framework\TestCase;

class CredentialsTest extends TestCase
{
    public function testHasGetters()
    {
        $c = new Credentials('111', '222', '333', '444');

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }
}
