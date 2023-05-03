<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Product\Mocks;

use SapientPro\EbayTraditionalSDK\Product\Services\ProductBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends ProductBaseService
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
