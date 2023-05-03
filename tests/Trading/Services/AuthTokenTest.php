<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Services;

use SapientPro\EbayTraditionalSDK\Tests\Mocks\HttpHandler;
use SapientPro\EbayTraditionalSDK\Trading\Services\TradingService;
use SapientPro\EbayTraditionalSDK\Trading\Types;
use PHPUnit\Framework\TestCase;

class AuthTokenTest extends TestCase
{
    public function testAuthTokenIsUsedInRequst()
    {
        $s = new TradingService([
            'apiVersion'  => '',
            'authToken'   => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId'      => 0,
            'httpHandler' => new HttpHandler(),
        ]);

        // Calling the operation results in the auth token been set by the service.
        $r = new Types\GetEbayOfficialTimeRequestType();
        $this->assertEquals(null, $r->RequesterCredentials);
        $s->getEbayOfficialTime($r);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('321', $r->RequesterCredentials->eBayAuthToken);

        // Calling the operation results in the auth token been set by the service.
        $r = new Types\GetEbayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $this->assertEquals(null, $r->RequesterCredentials->eBayAuthToken);
        $s->getEbayOfficialTime($r);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('321', $r->RequesterCredentials->eBayAuthToken);

        // Calling the operation shouldn't modify an existing auth token.
        $r = new Types\GetEbayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $r->RequesterCredentials->eBayAuthToken = '123';
        $s->getEbayOfficialTime($r);
        $this->assertInstanceOf('\SapientPro\EbayTraditionalSDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('123', $r->RequesterCredentials->eBayAuthToken);
    }

    public function testAuthTokenIsNotUsedInRequst()
    {
        $s = new TradingService([
            'apiVersion'    => '',
            'authorization' => '123',
            'authToken'     => '321',
            'credentials'   => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId'        => 0,
            'httpHandler'   => new HttpHandler(),
        ]);

        /**
         * Calling an operation when using an OAUTH token should not
         * result in ANY token appearing withing the body of the request.
         */

        $r = new Types\GetEbayOfficialTimeRequestType();
        $this->assertEquals(null, $r->RequesterCredentials);
        $s->getEbayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);

        $r = new Types\GetEbayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $this->assertEquals(null, $r->RequesterCredentials->eBayAuthToken);
        $s->getEbayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);

        $r = new Types\GetEbayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $r->RequesterCredentials->eBayAuthToken = '123';
        $s->getEbayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);
    }
}
