<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Services;

use SapientPro\EbayTraditionalSDK\Finding\Types\FindCompletedItemsRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindCompletedItemsResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsAdvancedRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsAdvancedResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByCategoryRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByCategoryResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByImageRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByImageResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByKeywordsRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByKeywordsResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByProductRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByProductResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsForFavoriteSearchRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsForFavoriteSearchResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsIneBayStoresRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsIneBayStoresResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetHistogramsRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetHistogramsResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetSearchKeywordsRecommendationRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetSearchKeywordsRecommendationResponse;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\Finding\Types\GetVersionResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FindingService extends FindingBaseService
{
    public const API_VERSION = '1.13.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetSearchKeywordsRecommendationRequest  $request
     * @return GetSearchKeywordsRecommendationResponse
     */
    public function getSearchKeywordsRecommendation(
        GetSearchKeywordsRecommendationRequest $request
    ): GetSearchKeywordsRecommendationResponse {
        return $this->getSearchKeywordsRecommendationAsync($request)->wait();
    }

    /**
     * @param  GetSearchKeywordsRecommendationRequest  $request
     * @return PromiseInterface
     */
    public function getSearchKeywordsRecommendationAsync(
        GetSearchKeywordsRecommendationRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getSearchKeywordsRecommendation',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\GetSearchKeywordsRecommendationResponse'
        );
    }

    /**
     * @param  FindItemsByKeywordsRequest  $request
     * @return FindItemsByKeywordsResponse
     */
    public function findItemsByKeywords(FindItemsByKeywordsRequest $request): FindItemsByKeywordsResponse
    {
        return $this->findItemsByKeywordsAsync($request)->wait();
    }

    /**
     * @param  FindItemsByKeywordsRequest  $request
     * @return PromiseInterface
     */
    public function findItemsByKeywordsAsync(FindItemsByKeywordsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsByKeywords',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByKeywordsResponse'
        );
    }

    /**
     * @param  FindItemsByCategoryRequest  $request
     * @return FindItemsByCategoryResponse
     */
    public function findItemsByCategory(FindItemsByCategoryRequest $request): FindItemsByCategoryResponse
    {
        return $this->findItemsByCategoryAsync($request)->wait();
    }

    /**
     * @param  FindItemsByCategoryRequest  $request
     * @return PromiseInterface
     */
    public function findItemsByCategoryAsync(FindItemsByCategoryRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsByCategory',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByCategoryResponse'
        );
    }

    /**
     * @param  FindItemsAdvancedRequest  $request
     * @return FindItemsAdvancedResponse
     */
    public function findItemsAdvanced(FindItemsAdvancedRequest $request): FindItemsAdvancedResponse
    {
        return $this->findItemsAdvancedAsync($request)->wait();
    }

    /**
     * @param  FindItemsAdvancedRequest  $request
     * @return PromiseInterface
     */
    public function findItemsAdvancedAsync(FindItemsAdvancedRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsAdvanced',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsAdvancedResponse'
        );
    }

    /**
     * @param  FindItemsByProductRequest  $request
     * @return FindItemsByProductResponse
     */
    public function findItemsByProduct(FindItemsByProductRequest $request): FindItemsByProductResponse
    {
        return $this->findItemsByProductAsync($request)->wait();
    }

    /**
     * @param  FindItemsByProductRequest  $request
     * @return PromiseInterface
     */
    public function findItemsByProductAsync(FindItemsByProductRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsByProduct',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByProductResponse'
        );
    }

    /**
     * @param  FindItemsIneBayStoresRequest  $request
     * @return FindItemsIneBayStoresResponse
     */
    public function findItemsIneBayStores(FindItemsIneBayStoresRequest $request): FindItemsIneBayStoresResponse
    {
        return $this->findItemsIneBayStoresAsync($request)->wait();
    }

    /**
     * @param  FindItemsIneBayStoresRequest  $request
     * @return PromiseInterface
     */
    public function findItemsIneBayStoresAsync(FindItemsIneBayStoresRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsIneBayStores',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsIneBayStoresResponse'
        );
    }

    /**
     * @param  FindItemsByImageRequest  $request
     * @return FindItemsByImageResponse
     */
    public function findItemsByImage(FindItemsByImageRequest $request): FindItemsByImageResponse
    {
        return $this->findItemsByImageAsync($request)->wait();
    }

    /**
     * @param  FindItemsByImageRequest  $request
     * @return PromiseInterface
     */
    public function findItemsByImageAsync(FindItemsByImageRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsByImage',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsByImageResponse'
        );
    }

    /**
     * @param  GetHistogramsRequest  $request
     * @return GetHistogramsResponse
     */
    public function getHistograms(GetHistogramsRequest $request): GetHistogramsResponse
    {
        return $this->getHistogramsAsync($request)->wait();
    }

    /**
     * @param  GetHistogramsRequest  $request
     * @return PromiseInterface
     */
    public function getHistogramsAsync(GetHistogramsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getHistograms',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\GetHistogramsResponse'
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
            '\SapientPro\EbayTraditionalSDK\Finding\Types\GetVersionResponse'
        );
    }

    /**
     * @param  FindItemsForFavoriteSearchRequest  $request
     * @return FindItemsForFavoriteSearchResponse
     */
    public function findItemsForFavoriteSearch(
        FindItemsForFavoriteSearchRequest $request
    ): FindItemsForFavoriteSearchResponse {
        return $this->findItemsForFavoriteSearchAsync($request)->wait();
    }

    /**
     * @param  FindItemsForFavoriteSearchRequest  $request
     * @return PromiseInterface
     */
    public function findItemsForFavoriteSearchAsync(FindItemsForFavoriteSearchRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findItemsForFavoriteSearch',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindItemsForFavoriteSearchResponse'
        );
    }

    /**
     * @param  FindCompletedItemsRequest  $request
     * @return FindCompletedItemsResponse
     */
    public function findCompletedItems(FindCompletedItemsRequest $request): FindCompletedItemsResponse
    {
        return $this->findCompletedItemsAsync($request)->wait();
    }

    /**
     * @param  FindCompletedItemsRequest  $request
     * @return PromiseInterface
     */
    public function findCompletedItemsAsync(FindCompletedItemsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'findCompletedItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Finding\Types\FindCompletedItemsResponse'
        );
    }
}
