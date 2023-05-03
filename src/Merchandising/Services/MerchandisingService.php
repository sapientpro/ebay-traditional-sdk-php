<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Merchandising\Services;

use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetDealsRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetMostWatchedItemsRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetRelatedCategoryItemsRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetSimilarItemsRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetTopSellingProductsRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\GetVersionResponse;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceItemResponse;
use SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceProductResponse;
use GuzzleHttp\Promise\PromiseInterface;

class MerchandisingService extends MerchandisingBaseService
{
    public const API_VERSION = '1.5.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetRelatedCategoryItemsRequest  $request
     * @return MerchandisingServiceItemResponse
     */
    public function getRelatedCategoryItems(GetRelatedCategoryItemsRequest $request): MerchandisingServiceItemResponse
    {
        return $this->getRelatedCategoryItemsAsync($request)->wait();
    }

    /**
     * @param  GetRelatedCategoryItemsRequest  $request
     * @return PromiseInterface
     */
    public function getRelatedCategoryItemsAsync(GetRelatedCategoryItemsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getRelatedCategoryItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param  GetMostWatchedItemsRequest  $request
     * @return MerchandisingServiceItemResponse
     */
    public function getMostWatchedItems(GetMostWatchedItemsRequest $request): MerchandisingServiceItemResponse
    {
        return $this->getMostWatchedItemsAsync($request)->wait();
    }

    /**
     * @param  GetMostWatchedItemsRequest  $request
     * @return PromiseInterface
     */
    public function getMostWatchedItemsAsync(GetMostWatchedItemsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getMostWatchedItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param  GetTopSellingProductsRequest  $request
     * @return MerchandisingServiceProductResponse
     */
    public function getTopSellingProducts(GetTopSellingProductsRequest $request): MerchandisingServiceProductResponse
    {
        return $this->getTopSellingProductsAsync($request)->wait();
    }

    /**
     * @param  GetTopSellingProductsRequest  $request
     * @return PromiseInterface
     */
    public function getTopSellingProductsAsync(GetTopSellingProductsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getTopSellingProducts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceProductResponse'
        );
    }

    /**
     * @param  GetDealsRequest  $request
     * @return MerchandisingServiceItemResponse
     */
    public function getDeals(GetDealsRequest $request): MerchandisingServiceItemResponse
    {
        return $this->getDealsAsync($request)->wait();
    }

    /**
     * @param  GetDealsRequest  $request
     * @return PromiseInterface
     */
    public function getDealsAsync(GetDealsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getDeals',
            $request,
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param  GetSimilarItemsRequest  $request
     * @return MerchandisingServiceItemResponse
     */
    public function getSimilarItems(GetSimilarItemsRequest $request): MerchandisingServiceItemResponse
    {
        return $this->getSimilarItemsAsync($request)->wait();
    }

    /**
     * @param  GetSimilarItemsRequest  $request
     * @return PromiseInterface
     */
    public function getSimilarItemsAsync(GetSimilarItemsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getSimilarItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\MerchandisingServiceItemResponse'
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
            '\SapientPro\EbayTraditionalSDK\Merchandising\Types\GetVersionResponse'
        );
    }
}
