<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Services;

use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetActivityOptionsRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetActivityOptionsResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnDetailRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnDetailResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnMetadataRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnMetadataResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetUserReturnsRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetUserReturnsResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetVersionResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\IssueRefundRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\IssueRefundResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideSellerInfoRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideSellerInfoResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideTrackingInfoRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideTrackingInfoResponse;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\SetItemAsReceivedRequest;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Types\SetItemAsReceivedResponse;
use GuzzleHttp\Promise\PromiseInterface;

class ReturnManagementService extends ReturnManagementBaseService
{
    public const API_VERSION = '1.1.0';

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
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param  GetUserReturnsRequest  $request
     * @return GetUserReturnsResponse
     */
    public function getUserReturns(GetUserReturnsRequest $request): GetUserReturnsResponse
    {
        return $this->getUserReturnsAsync($request)->wait();
    }

    /**
     * @param  GetUserReturnsRequest  $request
     * @return PromiseInterface
     */
    public function getUserReturnsAsync(GetUserReturnsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getUserReturns',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param  GetReturnDetailRequest  $request
     * @return GetReturnDetailResponse
     */
    public function getReturnDetail(GetReturnDetailRequest $request): GetReturnDetailResponse
    {
        return $this->getReturnDetailAsync($request)->wait();
    }

    /**
     * @param  GetReturnDetailRequest  $request
     * @return PromiseInterface
     */
    public function getReturnDetailAsync(GetReturnDetailRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getReturnDetail',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param  GetActivityOptionsRequest  $request
     * @return GetActivityOptionsResponse
     */
    public function getActivityOptions(GetActivityOptionsRequest $request): GetActivityOptionsResponse
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param  GetActivityOptionsRequest  $request
     * @return PromiseInterface
     */
    public function getActivityOptionsAsync(GetActivityOptionsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param  IssueRefundRequest  $request
     * @return IssueRefundResponse
     */
    public function issueRefund(IssueRefundRequest $request): IssueRefundResponse
    {
        return $this->issueRefundAsync($request)->wait();
    }

    /**
     * @param  IssueRefundRequest  $request
     * @return PromiseInterface
     */
    public function issueRefundAsync(IssueRefundRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'issueRefund',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param  ProvideSellerInfoRequest  $request
     * @return ProvideSellerInfoResponse
     */
    public function provideSellerInfo(ProvideSellerInfoRequest $request): ProvideSellerInfoResponse
    {
        return $this->provideSellerInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideSellerInfoRequest  $request
     * @return PromiseInterface
     */
    public function provideSellerInfoAsync(ProvideSellerInfoRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'provideSellerInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param  GetReturnMetadataRequest  $request
     * @return GetReturnMetadataResponse
     */
    public function getReturnMetadata(GetReturnMetadataRequest $request): GetReturnMetadataResponse
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param  GetReturnMetadataRequest  $request
     * @return PromiseInterface
     */
    public function getReturnMetadataAsync(GetReturnMetadataRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getReturnMetadata',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param  ProvideTrackingInfoRequest  $request
     * @return ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(ProvideTrackingInfoRequest $request): ProvideTrackingInfoResponse
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideTrackingInfoRequest  $request
     * @return PromiseInterface
     */
    public function provideTrackingInfoAsync(ProvideTrackingInfoRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param  SetItemAsReceivedRequest  $request
     * @return SetItemAsReceivedResponse
     */
    public function setItemAsReceived(SetItemAsReceivedRequest $request): SetItemAsReceivedResponse
    {
        return $this->setItemAsReceivedAsync($request)->wait();
    }

    /**
     * @param  SetItemAsReceivedRequest  $request
     * @return PromiseInterface
     */
    public function setItemAsReceivedAsync(SetItemAsReceivedRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'setItemAsReceived',
            $request,
            '\SapientPro\EbayTraditionalSDK\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
