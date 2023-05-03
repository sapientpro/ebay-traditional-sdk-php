<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Feedback\Services;

use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByCategoryRequest;
use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByPeriodRequest;
use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest;
use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryByTransactionRequest;
use SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryResponse;
use SapientPro\EbayTraditionalSDK\Feedback\Types\GetDSRSummaryRequest;
use SapientPro\EbayTraditionalSDK\Feedback\Types\GetDSRSummaryResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FeedbackService extends FeedbackBaseService
{
    public const API_VERSION = '1.2.2';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  CreateDSRSummaryByTransactionRequest  $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByTransaction(
        CreateDSRSummaryByTransactionRequest $request
    ): CreateDSRSummaryResponse {
        return $this->createDSRSummaryByTransactionAsync($request)->wait();
    }

    /**
     * @param  CreateDSRSummaryByTransactionRequest  $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByTransactionAsync(CreateDSRSummaryByTransactionRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createDSRSummaryByTransaction',
            $request,
            '\SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param  CreateDSRSummaryByPeriodRequest  $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByPeriod(CreateDSRSummaryByPeriodRequest $request): CreateDSRSummaryResponse
    {
        return $this->createDSRSummaryByPeriodAsync($request)->wait();
    }

    /**
     * @param  CreateDSRSummaryByPeriodRequest  $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByPeriodAsync(CreateDSRSummaryByPeriodRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createDSRSummaryByPeriod',
            $request,
            '\SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param  CreateDSRSummaryByCategoryRequest  $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByCategory(CreateDSRSummaryByCategoryRequest $request): CreateDSRSummaryResponse
    {
        return $this->createDSRSummaryByCategoryAsync($request)->wait();
    }

    /**
     * @param  CreateDSRSummaryByCategoryRequest  $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByCategoryAsync(CreateDSRSummaryByCategoryRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createDSRSummaryByCategory',
            $request,
            '\SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param  CreateDSRSummaryByShippingDetailRequest  $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByShippingDetail(
        CreateDSRSummaryByShippingDetailRequest $request
    ): CreateDSRSummaryResponse {
        return $this->createDSRSummaryByShippingDetailAsync($request)->wait();
    }

    /**
     * @param  CreateDSRSummaryByShippingDetailRequest  $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByShippingDetailAsync(
        CreateDSRSummaryByShippingDetailRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'createDSRSummaryByShippingDetail',
            $request,
            '\SapientPro\EbayTraditionalSDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param  GetDSRSummaryRequest  $request
     * @return GetDSRSummaryResponse
     */
    public function getDSRSummary(GetDSRSummaryRequest $request): GetDSRSummaryResponse
    {
        return $this->getDSRSummaryAsync($request)->wait();
    }

    /**
     * @param  GetDSRSummaryRequest  $request
     * @return PromiseInterface
     */
    public function getDSRSummaryAsync(GetDSRSummaryRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getDSRSummary',
            $request,
            '\SapientPro\EbayTraditionalSDK\Feedback\Types\GetDSRSummaryResponse'
        );
    }
}
