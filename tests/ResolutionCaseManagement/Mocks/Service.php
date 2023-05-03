<?php

namespace SapientPro\EbayTraditionalSDK\Tests\ResolutionCaseManagement\Mocks;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends ResolutionCaseManagementBaseService
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
