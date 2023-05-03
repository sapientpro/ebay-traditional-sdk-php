<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Services;

use SapientPro\EbayTraditionalSDK\HalfFinding\Types\FindItemsRequest;
use SapientPro\EbayTraditionalSDK\HalfFinding\Types\FindItemsResponse;
use SapientPro\EbayTraditionalSDK\HalfFinding\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\HalfFinding\Types\GetVersionResponse;
use GuzzleHttp\Promise\PromiseInterface;

class HalfFindingService extends HalfFindingBaseService
{
    public const API_VERSION = '1.2.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetVersionRequest  $request
     * @return GetVersionResponse
     */
    public function getVersion(GetVersionRequest $request): GetVersionResponse
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param  GetVersionRequest  $request
     * @return PromiseInterface
     */
    public function getVersionAsync(GetVersionRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\SapientPro\EbayTraditionalSDK\HalfFinding\Types\GetVersionResponse'
        );
    }

    /**
     * @param  FindItemsRequest  $request
     * @return FindItemsResponse
     */
    public function findHalfItems(FindItemsRequest $request): FindItemsResponse
    {
        return $this->findHalfItemsAsync($request)->wait();
    }

    /**
     * @param  FindItemsRequest  $request
     * @return PromiseInterface
     */
    public function findHalfItemsAsync(FindItemsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findHalfItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\HalfFinding\Types\FindItemsResponse'
        );
    }
}
