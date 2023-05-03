<?php

namespace SapientPro\EbayTraditionalSDK\Tests\BulkDataExchange\Mocks;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Services\BulkDataExchangeBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends BulkDataExchangeBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass'
        )->wait();
    }
}
