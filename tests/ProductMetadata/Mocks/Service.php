<?php

namespace SapientPro\EbayTraditionalSDK\Tests\ProductMetadata\Mocks;

use SapientPro\EbayTraditionalSDK\ProductMetadata\Services\ProductMetadataBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends ProductMetadataBaseService
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
