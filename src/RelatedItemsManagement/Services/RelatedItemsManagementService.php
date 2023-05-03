<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Services;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\CreateBundlesRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\CreateBundlesResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\DeleteBundlesRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\DeleteBundlesResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\FindBundlesRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\FindBundlesResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetBundlesRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetBundlesResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetVersionResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundlesRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundlesResponse;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse;
use GuzzleHttp\Promise\PromiseInterface;

class RelatedItemsManagementService extends RelatedItemsManagementBaseService
{
    public const API_VERSION = '1.0.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  CreateBundlesRequest  $request
     * @return CreateBundlesResponse
     */
    public function createBundles(CreateBundlesRequest $request): CreateBundlesResponse
    {
        return $this->createBundlesAsync($request)->wait();
    }

    /**
     * @param  CreateBundlesRequest  $request
     * @return PromiseInterface
     */
    public function createBundlesAsync(CreateBundlesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createBundles',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\CreateBundlesResponse'
        );
    }

    /**
     * @param  FindBundlesRequest  $request
     * @return FindBundlesResponse
     */
    public function findBundles(FindBundlesRequest $request): FindBundlesResponse
    {
        return $this->findBundlesAsync($request)->wait();
    }

    /**
     * @param  FindBundlesRequest  $request
     * @return PromiseInterface
     */
    public function findBundlesAsync(FindBundlesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findBundles',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\FindBundlesResponse'
        );
    }

    /**
     * @param  GetBundlesRequest  $request
     * @return GetBundlesResponse
     */
    public function getBundles(GetBundlesRequest $request): GetBundlesResponse
    {
        return $this->getBundlesAsync($request)->wait();
    }

    /**
     * @param  GetBundlesRequest  $request
     * @return PromiseInterface
     */
    public function getBundlesAsync(GetBundlesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getBundles',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetBundlesResponse'
        );
    }

    /**
     * @param  UpdateBundlesRequest  $request
     * @return UpdateBundlesResponse
     */
    public function updateBundles(UpdateBundlesRequest $request): UpdateBundlesResponse
    {
        return $this->updateBundlesAsync($request)->wait();
    }

    /**
     * @param  UpdateBundlesRequest  $request
     * @return PromiseInterface
     */
    public function updateBundlesAsync(UpdateBundlesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'updateBundles',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundlesResponse'
        );
    }

    /**
     * @param  UpdateBundleStatusRequest  $request
     * @return UpdateBundleStatusResponse
     */
    public function updateBundleStatus(UpdateBundleStatusRequest $request): UpdateBundleStatusResponse
    {
        return $this->updateBundleStatusAsync($request)->wait();
    }

    /**
     * @param  UpdateBundleStatusRequest  $request
     * @return PromiseInterface
     */
    public function updateBundleStatusAsync(UpdateBundleStatusRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'updateBundleStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse'
        );
    }

    /**
     * @param  DeleteBundlesRequest  $request
     * @return DeleteBundlesResponse
     */
    public function deleteBundles(DeleteBundlesRequest $request): DeleteBundlesResponse
    {
        return $this->deleteBundlesAsync($request)->wait();
    }

    /**
     * @param  DeleteBundlesRequest  $request
     * @return PromiseInterface
     */
    public function deleteBundlesAsync(DeleteBundlesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'deleteBundles',
            $request,
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\DeleteBundlesResponse'
        );
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
            '\SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\GetVersionResponse'
        );
    }
}
