<?php

namespace SapientPro\EbayTraditionalSDK\Tests\RelatedItemsManagement\Mocks;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends RelatedItemsManagementBaseService
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
