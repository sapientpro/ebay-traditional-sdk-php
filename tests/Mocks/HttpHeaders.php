<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

use SapientPro\EbayTraditionalSDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}
