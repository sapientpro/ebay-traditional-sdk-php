<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Services;

use SapientPro\EbayTraditionalSDK\Shopping\Types\FindProductsRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\FindProductsResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetCategoryInfoRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetCategoryInfoResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetEbayTimeRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetEbayTimeResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetItemStatusRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetItemStatusResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetMultipleItemsRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetMultipleItemsResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetShippingCostsRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetShippingCostsResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetSingleItemRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetSingleItemResponseType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetUserProfileRequestType;
use SapientPro\EbayTraditionalSDK\Shopping\Types\GetUserProfileResponseType;
use GuzzleHttp\Promise\PromiseInterface;

class ShoppingService extends ShoppingBaseService
{
    public const API_VERSION = '1027';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  FindProductsRequestType  $request
     * @return FindProductsResponseType
     */
    public function findProducts(FindProductsRequestType $request): FindProductsResponseType
    {
        return $this->findProductsAsync($request)->wait();
    }

    /**
     * @param  FindProductsRequestType  $request
     * @return PromiseInterface
     */
    public function findProductsAsync(FindProductsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'FindProducts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\FindProductsResponseType'
        );
    }

    /**
     * @param  GetCategoryInfoRequestType  $request
     * @return GetCategoryInfoResponseType
     */
    public function getCategoryInfo(GetCategoryInfoRequestType $request): GetCategoryInfoResponseType
    {
        return $this->getCategoryInfoAsync($request)->wait();
    }

    /**
     * @param  GetCategoryInfoRequestType  $request
     * @return PromiseInterface
     */
    public function getCategoryInfoAsync(GetCategoryInfoRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCategoryInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetCategoryInfoResponseType'
        );
    }

    /**
     * @param  GetItemStatusRequestType  $request
     * @return GetItemStatusResponseType
     */
    public function getItemStatus(GetItemStatusRequestType $request): GetItemStatusResponseType
    {
        return $this->getItemStatusAsync($request)->wait();
    }

    /**
     * @param  GetItemStatusRequestType  $request
     * @return PromiseInterface
     */
    public function getItemStatusAsync(GetItemStatusRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetItemStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetItemStatusResponseType'
        );
    }

    /**
     * @param  GetMultipleItemsRequestType  $request
     * @return GetMultipleItemsResponseType
     */
    public function getMultipleItems(GetMultipleItemsRequestType $request): GetMultipleItemsResponseType
    {
        return $this->getMultipleItemsAsync($request)->wait();
    }

    /**
     * @param  GetMultipleItemsRequestType  $request
     * @return PromiseInterface
     */
    public function getMultipleItemsAsync(GetMultipleItemsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMultipleItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetMultipleItemsResponseType'
        );
    }

    /**
     * @param  GetShippingCostsRequestType  $request
     * @return GetShippingCostsResponseType
     */
    public function getShippingCosts(GetShippingCostsRequestType $request): GetShippingCostsResponseType
    {
        return $this->getShippingCostsAsync($request)->wait();
    }

    /**
     * @param  GetShippingCostsRequestType  $request
     * @return PromiseInterface
     */
    public function getShippingCostsAsync(GetShippingCostsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetShippingCosts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetShippingCostsResponseType'
        );
    }

    /**
     * @param  GetSingleItemRequestType  $request
     * @return GetSingleItemResponseType
     */
    public function getSingleItem(GetSingleItemRequestType $request): GetSingleItemResponseType
    {
        return $this->getSingleItemAsync($request)->wait();
    }

    /**
     * @param  GetSingleItemRequestType  $request
     * @return PromiseInterface
     */
    public function getSingleItemAsync(GetSingleItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSingleItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetSingleItemResponseType'
        );
    }

    /**
     * @param  GetUserProfileRequestType  $request
     * @return GetUserProfileResponseType
     */
    public function getUserProfile(GetUserProfileRequestType $request): GetUserProfileResponseType
    {
        return $this->getUserProfileAsync($request)->wait();
    }

    /**
     * @param  GetUserProfileRequestType  $request
     * @return PromiseInterface
     */
    public function getUserProfileAsync(GetUserProfileRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetUserProfile',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetUserProfileResponseType'
        );
    }

    /**
     * @param  GetEbayTimeRequestType  $request
     * @return GetEbayTimeResponseType
     */
    public function getBayTime(GetEbayTimeRequestType $request): GetEbayTimeResponseType
    {
        return $this->getBayTimeAsync($request)->wait();
    }

    /**
     * @param  GetEbayTimeRequestType  $request
     * @return PromiseInterface
     */
    public function getBayTimeAsync(GetEbayTimeRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GeteBayTime',
            $request,
            '\SapientPro\EbayTraditionalSDK\Shopping\Types\GetEbayTimeResponseType'
        );
    }
}
