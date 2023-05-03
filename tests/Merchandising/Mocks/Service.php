<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Merchandising\Mocks;

use SapientPro\EbayTraditionalSDK\Merchandising\Services\MerchandisingBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends MerchandisingBaseService
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
