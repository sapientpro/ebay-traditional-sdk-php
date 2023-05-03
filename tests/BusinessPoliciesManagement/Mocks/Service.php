<?php

namespace SapientPro\EbayTraditionalSDK\Tests\BusinessPoliciesManagement\Mocks;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends BusinessPoliciesManagementBaseService
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
