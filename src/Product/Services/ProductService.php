<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Services;

use SapientPro\EbayTraditionalSDK\Product\Types\AddProductsRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\AddProductsResponse;
use SapientPro\EbayTraditionalSDK\Product\Types\FindCompatibilitiesBySpecificationRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\FindCompatibilitiesBySpecificationResponse;
use SapientPro\EbayTraditionalSDK\Product\Types\FindProductsByCompatibilityRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\FindProductsRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\FindProductsResponse;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductCompatibilitiesRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductCompatiblitiesResponse;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductDetailsRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductDetailsResponse;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductSubmissionsRequest;
use SapientPro\EbayTraditionalSDK\Product\Types\GetProductSubmissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;

class ProductService extends ProductBaseService
{
    public const API_VERSION = '1.4.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  FindProductsRequest  $request
     * @return FindProductsResponse
     */
    public function findProducts(FindProductsRequest $request): FindProductsResponse
    {
        return $this->findProductsAsync($request)->wait();
    }

    /**
     * @param  FindProductsRequest  $request
     * @return PromiseInterface
     */
    public function findProductsAsync(FindProductsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findProducts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param  FindProductsByCompatibilityRequest  $request
     * @return FindProductsResponse
     */
    public function findProductsByCompatibility(FindProductsByCompatibilityRequest $request): FindProductsResponse
    {
        return $this->findProductsByCompatibilityAsync($request)->wait();
    }

    /**
     * @param  FindProductsByCompatibilityRequest  $request
     * @return PromiseInterface
     */
    public function findProductsByCompatibilityAsync(FindProductsByCompatibilityRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findProductsByCompatibility',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param  GetProductDetailsRequest  $request
     * @return GetProductDetailsResponse
     */
    public function getProductDetails(GetProductDetailsRequest $request): GetProductDetailsResponse
    {
        return $this->getProductDetailsAsync($request)->wait();
    }

    /**
     * @param  GetProductDetailsRequest  $request
     * @return PromiseInterface
     */
    public function getProductDetailsAsync(GetProductDetailsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductDetails',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\GetProductDetailsResponse'
        );
    }

    /**
     * @param  GetProductCompatibilitiesRequest  $request
     * @return GetProductCompatiblitiesResponse
     */
    public function getProductCompatibilities(
        GetProductCompatibilitiesRequest $request
    ): GetProductCompatiblitiesResponse {
        return $this->getProductCompatibilitiesAsync($request)->wait();
    }

    /**
     * @param  GetProductCompatibilitiesRequest  $request
     * @return PromiseInterface
     */
    public function getProductCompatibilitiesAsync(GetProductCompatibilitiesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductCompatibilities',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\GetProductCompatiblitiesResponse'
        );
    }

    /**
     * @param  FindCompatibilitiesBySpecificationRequest  $request
     * @return FindCompatibilitiesBySpecificationResponse
     */
    public function findCompatibilitiesBySpecification(
        FindCompatibilitiesBySpecificationRequest $request
    ): FindCompatibilitiesBySpecificationResponse {
        return $this->findCompatibilitiesBySpecificationAsync($request)->wait();
    }

    /**
     * @param  FindCompatibilitiesBySpecificationRequest  $request
     * @return PromiseInterface
     */
    public function findCompatibilitiesBySpecificationAsync(
        FindCompatibilitiesBySpecificationRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'findCompatibilitiesBySpecification',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\FindCompatibilitiesBySpecificationResponse'
        );
    }

    /**
     * @param  AddProductsRequest  $request
     * @return AddProductsResponse
     */
    public function addProducts(AddProductsRequest $request): AddProductsResponse
    {
        return $this->addProductsAsync($request)->wait();
    }

    /**
     * @param  AddProductsRequest  $request
     * @return PromiseInterface
     */
    public function addProductsAsync(AddProductsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'addProducts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\AddProductsResponse'
        );
    }

    /**
     * @param  GetProductSubmissionsRequest  $request
     * @return GetProductSubmissionsResponse
     */
    public function getProductSubmissions(GetProductSubmissionsRequest $request): GetProductSubmissionsResponse
    {
        return $this->getProductSubmissionsAsync($request)->wait();
    }

    /**
     * @param  GetProductSubmissionsRequest  $request
     * @return PromiseInterface
     */
    public function getProductSubmissionsAsync(GetProductSubmissionsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductSubmissions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Product\Types\GetProductSubmissionsResponse'
        );
    }
}
