<?php

namespace SapientPro\EbayTraditionalSDK\Tests\ReturnManagement\Mocks;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Services\ReturnManagementBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends ReturnManagementBaseService
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
