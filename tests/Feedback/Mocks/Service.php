<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Feedback\Mocks;

use SapientPro\EbayTraditionalSDK\Feedback\Services\FeedbackBaseService;
use SapientPro\EbayTraditionalSDK\Tests\Mocks\ComplexClass;

class Service extends FeedbackBaseService
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
