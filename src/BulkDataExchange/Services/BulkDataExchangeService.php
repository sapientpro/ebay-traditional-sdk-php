<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BulkDataExchange\Services;

use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\ActivateRecurringJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\ActivateRecurringJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateRecurringJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateRecurringJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateUploadJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateUploadJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DeleteRecurringJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DeleteRecurringJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobsRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobsResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobStatusRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobStatusResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobsRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobsResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartDownloadJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartDownloadJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartUploadJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartUploadJobResponse;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\SuspendRecurringJobRequest;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\SuspendRecurringJobResponse;
use GuzzleHttp\Promise\PromiseInterface;

class BulkDataExchangeService extends BulkDataExchangeBaseService
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
     * @param  CreateUploadJobRequest  $request
     * @return CreateUploadJobResponse
     */
    public function createUploadJob(CreateUploadJobRequest $request): CreateUploadJobResponse
    {
        return $this->createUploadJobAsync($request)->wait();
    }

    /**
     * @param  CreateUploadJobRequest  $request
     * @return PromiseInterface
     */
    public function createUploadJobAsync(CreateUploadJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createUploadJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @param  StartUploadJobRequest  $request
     * @return StartUploadJobResponse
     */
    public function startUploadJob(StartUploadJobRequest $request): StartUploadJobResponse
    {
        return $this->startUploadJobAsync($request)->wait();
    }

    /**
     * @param  StartUploadJobRequest  $request
     * @return PromiseInterface
     */
    public function startUploadJobAsync(StartUploadJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'startUploadJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @param  AbortJobRequest  $request
     * @return AbortJobResponse
     */
    public function abortJob(AbortJobRequest $request): AbortJobResponse
    {
        return $this->abortJobAsync($request)->wait();
    }

    /**
     * @param  AbortJobRequest  $request
     * @return PromiseInterface
     */
    public function abortJobAsync(AbortJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'abortJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @param  GetJobsRequest  $request
     * @return GetJobsResponse
     */
    public function getJobs(GetJobsRequest $request): GetJobsResponse
    {
        return $this->getJobsAsync($request)->wait();
    }

    /**
     * @param  GetJobsRequest  $request
     * @return PromiseInterface
     */
    public function getJobsAsync(GetJobsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getJobs',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @param  GetJobStatusRequest  $request
     * @return GetJobStatusResponse
     */
    public function getJobStatus(GetJobStatusRequest $request): GetJobStatusResponse
    {
        return $this->getJobStatusAsync($request)->wait();
    }

    /**
     * @param  GetJobStatusRequest  $request
     * @return PromiseInterface
     */
    public function getJobStatusAsync(GetJobStatusRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getJobStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @param  StartDownloadJobRequest  $request
     * @return StartDownloadJobResponse
     */
    public function startDownloadJob(StartDownloadJobRequest $request): StartDownloadJobResponse
    {
        return $this->startDownloadJobAsync($request)->wait();
    }

    /**
     * @param  StartDownloadJobRequest  $request
     * @return PromiseInterface
     */
    public function startDownloadJobAsync(StartDownloadJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'startDownloadJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @param  CreateRecurringJobRequest  $request
     * @return CreateRecurringJobResponse
     */
    public function createRecurringJob(CreateRecurringJobRequest $request): CreateRecurringJobResponse
    {
        return $this->createRecurringJobAsync($request)->wait();
    }

    /**
     * @param  CreateRecurringJobRequest  $request
     * @return PromiseInterface
     */
    public function createRecurringJobAsync(CreateRecurringJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'createRecurringJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @param  DeleteRecurringJobRequest  $request
     * @return DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(DeleteRecurringJobRequest $request): DeleteRecurringJobResponse
    {
        return $this->deleteRecurringJobAsync($request)->wait();
    }

    /**
     * @param  DeleteRecurringJobRequest  $request
     * @return PromiseInterface
     */
    public function deleteRecurringJobAsync(DeleteRecurringJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'deleteRecurringJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @param  GetRecurringJobsRequest  $request
     * @return GetRecurringJobsResponse
     */
    public function getRecurringJobs(GetRecurringJobsRequest $request): GetRecurringJobsResponse
    {
        return $this->getRecurringJobsAsync($request)->wait();
    }

    /**
     * @param  GetRecurringJobsRequest  $request
     * @return PromiseInterface
     */
    public function getRecurringJobsAsync(GetRecurringJobsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getRecurringJobs',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @param  GetRecurringJobExecutionStatusRequest  $request
     * @return GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(
        GetRecurringJobExecutionStatusRequest $request
    ): GetRecurringJobExecutionStatusResponse {
        return $this->getRecurringJobExecutionStatusAsync($request)->wait();
    }

    /**
     * @param  GetRecurringJobExecutionStatusRequest  $request
     * @return PromiseInterface
     */
    public function getRecurringJobExecutionStatusAsync(
        GetRecurringJobExecutionStatusRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getRecurringJobExecutionStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @param  GetRecurringJobExecutionHistoryRequest  $request
     * @return GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(
        GetRecurringJobExecutionHistoryRequest $request
    ): GetRecurringJobExecutionHistoryResponse {
        return $this->getRecurringJobExecutionHistoryAsync($request)->wait();
    }

    /**
     * @param  GetRecurringJobExecutionHistoryRequest  $request
     * @return PromiseInterface
     */
    public function getRecurringJobExecutionHistoryAsync(
        GetRecurringJobExecutionHistoryRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'getRecurringJobExecutionHistory',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @param  ActivateRecurringJobRequest  $request
     * @return ActivateRecurringJobResponse
     */
    public function activateRecurringJob(ActivateRecurringJobRequest $request): ActivateRecurringJobResponse
    {
        return $this->activateRecurringJobAsync($request)->wait();
    }

    /**
     * @param  ActivateRecurringJobRequest  $request
     * @return PromiseInterface
     */
    public function activateRecurringJobAsync(ActivateRecurringJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'activateRecurringJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @param  SuspendRecurringJobRequest  $request
     * @return SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(SuspendRecurringJobRequest $request): SuspendRecurringJobResponse
    {
        return $this->suspendRecurringJobAsync($request)->wait();
    }

    /**
     * @param  SuspendRecurringJobRequest  $request
     * @return PromiseInterface
     */
    public function suspendRecurringJobAsync(SuspendRecurringJobRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'suspendRecurringJob',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @param  AbortRecurringJobExecutionRequest  $request
     * @return AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(
        AbortRecurringJobExecutionRequest $request
    ): AbortRecurringJobExecutionResponse {
        return $this->abortRecurringJobExecutionAsync($request)->wait();
    }

    /**
     * @param  AbortRecurringJobExecutionRequest  $request
     * @return PromiseInterface
     */
    public function abortRecurringJobExecutionAsync(AbortRecurringJobExecutionRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'abortRecurringJobExecution',
            $request,
            '\SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}
