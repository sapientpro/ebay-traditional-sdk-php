<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Analytics\Mocks;

use SapientPro\EbayTraditionalSDK\Analytics\Services\AnalyticsBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends AnalyticsBaseService
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
