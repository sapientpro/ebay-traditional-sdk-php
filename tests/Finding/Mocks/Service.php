<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Finding\Mocks;

use SapientPro\EbayTraditionalSDK\Finding\Services\FindingBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends FindingBaseService
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
