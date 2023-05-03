<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class Service extends BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId'  => '',
                    'certId' => '',
                    'devId'  => '',
                ],
            ]
        );
    }

    public function foo(ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            ComplexClass::class
        )->wait();
    }

    public function bar(ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            ComplexClass::class
        )->wait();
    }
}
