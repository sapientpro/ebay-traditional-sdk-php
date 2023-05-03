<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Marketing\Mocks;

use SapientPro\EbayTraditionalSDK\Marketing\Services\MarketingBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends MarketingBaseService
{
    protected static $operations
        = [
            'testOperation' => [
                'method'        => 'GET',
                'resource'      => 'item/{item_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass',
                'params'        => [
                ],
            ],
        ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
