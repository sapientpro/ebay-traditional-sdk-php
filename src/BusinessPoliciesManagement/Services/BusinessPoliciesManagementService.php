<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Services;

use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetVersionRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetVersionResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveProfileRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveProfileResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse;
use GuzzleHttp\Promise\PromiseInterface;

class BusinessPoliciesManagementService extends BusinessPoliciesManagementBaseService
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
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param  RemoveProfileRequest  $request
     * @return RemoveProfileResponse
     */
    public function removeProfile(RemoveProfileRequest $request): RemoveProfileResponse
    {
        return $this->removeProfileAsync($request)->wait();
    }

    /**
     * @param  RemoveProfileRequest  $request
     * @return PromiseInterface
     */
    public function removeProfileAsync(RemoveProfileRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'removeProfile',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveProfileResponse'
        );
    }

    /**
     * @param  AddSellerProfileRequest  $request
     * @return AddSellerProfileResponse
     */
    public function addSellerProfile(AddSellerProfileRequest $request): AddSellerProfileResponse
    {
        return $this->addSellerProfileAsync($request)->wait();
    }

    /**
     * @param  AddSellerProfileRequest  $request
     * @return PromiseInterface
     */
    public function addSellerProfileAsync(AddSellerProfileRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'addSellerProfile',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse'
        );
    }

    /**
     * @param  GetSellerProfilesRequest  $request
     * @return GetSellerProfilesResponse
     */
    public function getSellerProfiles(GetSellerProfilesRequest $request): GetSellerProfilesResponse
    {
        return $this->getSellerProfilesAsync($request)->wait();
    }

    /**
     * @param  GetSellerProfilesRequest  $request
     * @return PromiseInterface
     */
    public function getSellerProfilesAsync(GetSellerProfilesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getSellerProfiles',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse'
        );
    }

    /**
     * @param  SetSellerProfileRequest  $request
     * @return SetSellerProfileResponse
     */
    public function setSellerProfile(SetSellerProfileRequest $request): SetSellerProfileResponse
    {
        return $this->setSellerProfileAsync($request)->wait();
    }

    /**
     * @param  SetSellerProfileRequest  $request
     * @return PromiseInterface
     */
    public function setSellerProfileAsync(SetSellerProfileRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'setSellerProfile',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse'
        );
    }

    /**
     * @param  RemoveSellerProfilesRequest  $request
     * @return RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(RemoveSellerProfilesRequest $request): RemoveSellerProfilesResponse
    {
        return $this->removeSellerProfilesAsync($request)->wait();
    }

    /**
     * @param  RemoveSellerProfilesRequest  $request
     * @return PromiseInterface
     */
    public function removeSellerProfilesAsync(RemoveSellerProfilesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'removeSellerProfiles',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse'
        );
    }

    /**
     * @param  ConsolidateShippingProfilesRequest  $request
     * @return ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(
        ConsolidateShippingProfilesRequest $request
    ): ConsolidateShippingProfilesResponse {
        return $this->consolidateShippingProfilesAsync($request)->wait();
    }

    /**
     * @param  ConsolidateShippingProfilesRequest  $request
     * @return PromiseInterface
     */
    public function consolidateShippingProfilesAsync(ConsolidateShippingProfilesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'consolidateShippingProfiles',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse'
        );
    }

    /**
     * @param  GetConsolidationJobStatusRequest  $request
     * @return GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(
        GetConsolidationJobStatusRequest $request
    ): GetConsolidationJobStatusResponse {
        return $this->getConsolidationJobStatusAsync($request)->wait();
    }

    /**
     * @param  GetConsolidationJobStatusRequest  $request
     * @return PromiseInterface
     */
    public function getConsolidationJobStatusAsync(GetConsolidationJobStatusRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'getConsolidationJobStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse'
        );
    }

    /**
     * @param  RemoveOverridesRequest  $request
     * @return RemoveOverridesResponse
     */
    public function removeOverrides(RemoveOverridesRequest $request): RemoveOverridesResponse
    {
        return $this->removeOverridesAsync($request)->wait();
    }

    /**
     * @param  RemoveOverridesRequest  $request
     * @return PromiseInterface
     */
    public function removeOverridesAsync(RemoveOverridesRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'removeOverrides',
            $request,
            '\SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse'
        );
    }
}
