<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Feed\Mocks;

use SapientPro\EbayTraditionalSDK\Feed\Services\FeedBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends FeedBaseService
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
