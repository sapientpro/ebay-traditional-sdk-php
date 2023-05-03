<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class BaseService extends \SapientPro\EbayTraditionalSDK\Services\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct('http://production.com', 'http://sandbox.com', $config);
    }

    protected function getEbayHeaders(string $operationName): array
    {
        return ['fooHdr' => $operationName];
    }
}
