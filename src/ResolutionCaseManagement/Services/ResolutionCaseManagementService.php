<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Services;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetActivityOptionsRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetActivityOptionsResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetUserCasesRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetUserCasesResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetVersionResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssueFullRefundRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssueFullRefundResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssuePartialRefundRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferOtherSolutionRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferOtherSolutionResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferPartialRefundResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideRefundInfoRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideRefundInfoResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideReturnInfoResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideShippingInfoRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\UploadDocumentsRequest;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\UploadDocumentsResponse;
use GuzzleHttp\Promise\PromiseInterface;

class ResolutionCaseManagementService extends ResolutionCaseManagementBaseService
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
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param  GetUserCasesRequest  $request
     * @return GetUserCasesResponse
     */
    public function getUserCases(GetUserCasesRequest $request): GetUserCasesResponse
    {
        return $this->getUserCasesAsync($request)->wait();
    }

    /**
     * @param  GetUserCasesRequest  $request
     * @return PromiseInterface
     */
    public function getUserCasesAsync(GetUserCasesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getUserCases',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetUserCasesResponse'
        );
    }

    /**
     * @param  GetEBPCaseDetailRequest  $request
     * @return GetEBPCaseDetailResponse
     */
    public function getEBPCaseDetail(GetEBPCaseDetailRequest $request): GetEBPCaseDetailResponse
    {
        return $this->getEBPCaseDetailAsync($request)->wait();
    }

    /**
     * @param  GetEBPCaseDetailRequest  $request
     * @return PromiseInterface
     */
    public function getEBPCaseDetailAsync(GetEBPCaseDetailRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getEBPCaseDetail',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse'
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
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param  IssueFullRefundRequest  $request
     * @return IssueFullRefundResponse
     */
    public function issueFullRefund(IssueFullRefundRequest $request): IssueFullRefundResponse
    {
        return $this->issueFullRefundAsync($request)->wait();
    }

    /**
     * @param  IssueFullRefundRequest  $request
     * @return PromiseInterface
     */
    public function issueFullRefundAsync(IssueFullRefundRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'issueFullRefund',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssueFullRefundResponse'
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
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param  OfferOtherSolutionRequest  $request
     * @return OfferOtherSolutionResponse
     */
    public function offerOtherSolution(OfferOtherSolutionRequest $request): OfferOtherSolutionResponse
    {
        return $this->offerOtherSolutionAsync($request)->wait();
    }

    /**
     * @param  OfferOtherSolutionRequest  $request
     * @return PromiseInterface
     */
    public function offerOtherSolutionAsync(OfferOtherSolutionRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'offerOtherSolution',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferOtherSolutionResponse'
        );
    }

    /**
     * @param  EscalateToCustomerSupportRequest  $request
     * @return EscalateToCustomerSupportResponse
     */
    public function escalateToCustomerSupport(
        EscalateToCustomerSupportRequest $request
    ): EscalateToCustomerSupportResponse {
        return $this->escalateToCustomerSupportAsync($request)->wait();
    }

    /**
     * @param  EscalateToCustomerSupportRequest  $request
     * @return PromiseInterface
     */
    public function escalateToCustomerSupportAsync(EscalateToCustomerSupportRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'escalateToCustomerSupport',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse'
        );
    }

    /**
     * @param  AppealToCustomerSupportRequest  $request
     * @return AppealToCustomerSupportResponse
     */
    public function appealToCustomerSupport(AppealToCustomerSupportRequest $request): AppealToCustomerSupportResponse
    {
        return $this->appealToCustomerSupportAsync($request)->wait();
    }

    /**
     * @param  AppealToCustomerSupportRequest  $request
     * @return PromiseInterface
     */
    public function appealToCustomerSupportAsync(AppealToCustomerSupportRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'appealToCustomerSupport',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse'
        );
    }

    /**
     * @param  OfferPartialRefundRequest  $request
     * @return OfferPartialRefundResponse
     */
    public function offerPartialRefund(OfferPartialRefundRequest $request): OfferPartialRefundResponse
    {
        return $this->offerPartialRefundAsync($request)->wait();
    }

    /**
     * @param  OfferPartialRefundRequest  $request
     * @return PromiseInterface
     */
    public function offerPartialRefundAsync(OfferPartialRefundRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'offerPartialRefund',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferPartialRefundResponse'
        );
    }

    /**
     * @param  IssuePartialRefundRequest  $request
     * @return IssuePartialRefundResponse
     */
    public function issuePartialRefund(IssuePartialRefundRequest $request): IssuePartialRefundResponse
    {
        return $this->issuePartialRefundAsync($request)->wait();
    }

    /**
     * @param  IssuePartialRefundRequest  $request
     * @return PromiseInterface
     */
    public function issuePartialRefundAsync(IssuePartialRefundRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'issuePartialRefund',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse'
        );
    }

    /**
     * @param  ProvideShippingInfoRequest  $request
     * @return ProvideShippingInfoResponse
     */
    public function provideShippingInfo(ProvideShippingInfoRequest $request): ProvideShippingInfoResponse
    {
        return $this->provideShippingInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideShippingInfoRequest  $request
     * @return PromiseInterface
     */
    public function provideShippingInfoAsync(ProvideShippingInfoRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'provideShippingInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse'
        );
    }

    /**
     * @param  ProvideReturnInfoRequest  $request
     * @return ProvideReturnInfoResponse
     */
    public function provideReturnInfo(ProvideReturnInfoRequest $request): ProvideReturnInfoResponse
    {
        return $this->provideReturnInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideReturnInfoRequest  $request
     * @return PromiseInterface
     */
    public function provideReturnInfoAsync(ProvideReturnInfoRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'provideReturnInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideReturnInfoResponse'
        );
    }

    /**
     * @param  ProvideRefundInfoRequest  $request
     * @return ProvideRefundInfoResponse
     */
    public function provideRefundInfo(ProvideRefundInfoRequest $request): ProvideRefundInfoResponse
    {
        return $this->provideRefundInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideRefundInfoRequest  $request
     * @return PromiseInterface
     */
    public function provideRefundInfoAsync(ProvideRefundInfoRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'provideRefundInfo',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideRefundInfoResponse'
        );
    }

    /**
     * @param  UploadDocumentsRequest  $request
     * @return UploadDocumentsResponse
     */
    public function uploadDocuments(UploadDocumentsRequest $request): UploadDocumentsResponse
    {
        return $this->uploadDocumentsAsync($request)->wait();
    }

    /**
     * @param  UploadDocumentsRequest  $request
     * @return PromiseInterface
     */
    public function uploadDocumentsAsync(UploadDocumentsRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'uploadDocuments',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\UploadDocumentsResponse'
        );
    }

    /**
     * @param  OfferRefundUponReturnRequest  $request
     * @return OfferRefundUponReturnResponse
     */
    public function offerRefundUponReturn(OfferRefundUponReturnRequest $request): OfferRefundUponReturnResponse
    {
        return $this->offerRefundUponReturnAsync($request)->wait();
    }

    /**
     * @param  OfferRefundUponReturnRequest  $request
     * @return PromiseInterface
     */
    public function offerRefundUponReturnAsync(OfferRefundUponReturnRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'offerRefundUponReturn',
            $request,
            '\SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse'
        );
    }
}
