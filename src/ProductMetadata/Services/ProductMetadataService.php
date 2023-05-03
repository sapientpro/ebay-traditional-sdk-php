<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ProductMetadata\Services;

use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchDataVersionRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchDataVersionResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchNamesRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchNamesResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesResponse;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\ProductMetadataBulkRequest;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Types\ProductMetadataBulkResponse;
use GuzzleHttp\Promise\PromiseInterface;

class ProductMetadataService extends ProductMetadataBaseService
{
    public const API_VERSION = '1.3.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetProductSearchNamesRequest  $request
     * @return GetProductSearchNamesResponse
     */
    public function getProductSearchNames(GetProductSearchNamesRequest $request): GetProductSearchNamesResponse
    {
        return $this->getProductSearchNamesAsync($request)->wait();
    }

    /**
     * @param  GetProductSearchNamesRequest  $request
     * @return PromiseInterface
     */
    public function getProductSearchNamesAsync(GetProductSearchNamesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductSearchNames',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchNamesResponse'
        );
    }

    /**
     * @param  GetCompatibilitySearchNamesRequest  $request
     * @return GetCompatibilitySearchNamesResponse
     */
    public function getCompatibilitySearchNames(
        GetCompatibilitySearchNamesRequest $request
    ): GetCompatibilitySearchNamesResponse {
        return $this->getCompatibilitySearchNamesAsync($request)->wait();
    }

    /**
     * @param  GetCompatibilitySearchNamesRequest  $request
     * @return PromiseInterface
     */
    public function getCompatibilitySearchNamesAsync(
        GetCompatibilitySearchNamesRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getCompatibilitySearchNames',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse'
        );
    }

    /**
     * @param  GetProductSearchValuesRequest  $request
     * @return GetProductSearchValuesResponse
     */
    public function getProductSearchValues(GetProductSearchValuesRequest $request): GetProductSearchValuesResponse
    {
        return $this->getProductSearchValuesAsync($request)->wait();
    }

    /**
     * @param  GetProductSearchValuesRequest  $request
     * @return PromiseInterface
     */
    public function getProductSearchValuesAsync(GetProductSearchValuesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductSearchValues',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesResponse'
        );
    }

    /**
     * @param  GetProductSearchValuesBulkRequest  $request
     * @return GetProductSearchValuesBulkResponse
     */
    public function getProductSearchValuesBulk(
        GetProductSearchValuesBulkRequest $request
    ): GetProductSearchValuesBulkResponse {
        return $this->getProductSearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param  GetProductSearchValuesBulkRequest  $request
     * @return PromiseInterface
     */
    public function getProductSearchValuesBulkAsync(GetProductSearchValuesBulkRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductSearchValuesBulk',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse'
        );
    }

    /**
     * @param  GetCompatibilitySearchValuesRequest  $request
     * @return GetCompatibilitySearchValuesResponse
     */
    public function getCompatibilitySearchValues(
        GetCompatibilitySearchValuesRequest $request
    ): GetCompatibilitySearchValuesResponse {
        return $this->getCompatibilitySearchValuesAsync($request)->wait();
    }

    /**
     * @param  GetCompatibilitySearchValuesRequest  $request
     * @return PromiseInterface
     */
    public function getCompatibilitySearchValuesAsync(GetCompatibilitySearchValuesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchValues',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse'
        );
    }

    /**
     * @param  GetCompatibilitySearchValuesBulkRequest  $request
     * @return GetCompatibilitySearchValuesBulkResponse
     */
    public function getCompatibilitySearchValuesBulk(
        GetCompatibilitySearchValuesBulkRequest $request
    ): GetCompatibilitySearchValuesBulkResponse {
        return $this->getCompatibilitySearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param  GetCompatibilitySearchValuesBulkRequest  $request
     * @return PromiseInterface
     */
    public function getCompatibilitySearchValuesBulkAsync(
        GetCompatibilitySearchValuesBulkRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getCompatibilitySearchValuesBulk',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse'
        );
    }

    /**
     * @param  GetProductSearchDataVersionRequest  $request
     * @return GetProductSearchDataVersionResponse
     */
    public function getProductSearchDataVersion(
        GetProductSearchDataVersionRequest $request
    ): GetProductSearchDataVersionResponse {
        return $this->getProductSearchDataVersionAsync($request)->wait();
    }

    /**
     * @param  GetProductSearchDataVersionRequest  $request
     * @return PromiseInterface
     */
    public function getProductSearchDataVersionAsync(GetProductSearchDataVersionRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductSearchDataVersion',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetProductSearchDataVersionResponse'
        );
    }

    /**
     * @param  GetCompatibilitySearchDataVersionRequest  $request
     * @return GetCompatibilitySearchDataVersionResponse
     */
    public function getCompatibilitySearchDataVersion(
        GetCompatibilitySearchDataVersionRequest $request
    ): GetCompatibilitySearchDataVersionResponse {
        return $this->getCompatibilitySearchDataVersionAsync($request)->wait();
    }

    /**
     * @param  GetCompatibilitySearchDataVersionRequest  $request
     * @return PromiseInterface
     */
    public function getCompatibilitySearchDataVersionAsync(
        GetCompatibilitySearchDataVersionRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getCompatibilitySearchDataVersion',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse'
        );
    }

    /**
     * @param  ProductMetadataBulkRequest  $request
     * @return ProductMetadataBulkResponse
     */
    public function getProductMetadataBulk(ProductMetadataBulkRequest $request): ProductMetadataBulkResponse
    {
        return $this->getProductMetadataBulkAsync($request)->wait();
    }

    /**
     * @param  ProductMetadataBulkRequest  $request
     * @return PromiseInterface
     */
    public function getProductMetadataBulkAsync(ProductMetadataBulkRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getProductMetadataBulk',
            $request,
            '\SapientPro\EbayTraditionalSDK\ProductMetadata\Types\ProductMetadataBulkResponse'
        );
    }
}
