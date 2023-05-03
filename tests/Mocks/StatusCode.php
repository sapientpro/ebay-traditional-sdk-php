<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

use SapientPro\EbayTraditionalSDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
