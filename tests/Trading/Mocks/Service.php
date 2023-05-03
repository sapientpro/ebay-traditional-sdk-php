<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Trading\Mocks;

use SapientPro\EbayTraditionalSDK\Trading\Services\TradingBaseService;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayOfficialTimeRequestType;

class Service extends TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GetEbayOfficialTimeRequestType(),
            '\SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass'
        )->wait();
    }
}
