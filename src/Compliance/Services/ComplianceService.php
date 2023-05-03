<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Compliance\Services;

use SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsRestRequest;
use SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsRestResponse;
use SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsSummaryRestRequest;
use SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsSummaryRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class ComplianceService extends ComplianceBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetListingViolationsSummary' => [
                'method'        => 'GET',
                'resource'      => 'listing_violation_summary',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsSummaryRestResponse',
                'params'        => [
                    'compliance_type' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetListingViolations'        => [
                'method'        => 'GET',
                'resource'      => 'listing_violation',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Compliance\Types\GetListingViolationsRestResponse',
                'params'        => [
                    'limit'           => [
                        'valid' => ['integer'],
                    ],
                    'listing_id'      => [
                        'valid' => ['string'],
                    ],
                    'offset'          => [
                        'valid' => ['integer'],
                    ],
                    'compliance_type' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
    ];

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetListingViolationsSummaryRestRequest  $request
     * @return GetListingViolationsSummaryRestResponse
     */
    public function getListingViolationsSummary(
        GetListingViolationsSummaryRestRequest $request
    ): GetListingViolationsSummaryRestResponse {
        return $this->getListingViolationsSummaryAsync($request)->wait();
    }

    /**
     * @param  GetListingViolationsSummaryRestRequest  $request
     * @return PromiseInterface
     */
    public function getListingViolationsSummaryAsync(GetListingViolationsSummaryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetListingViolationsSummary', $request);
    }

    /**
     * @param  GetListingViolationsRestRequest  $request
     * @return GetListingViolationsRestResponse
     */
    public function getListingViolations(GetListingViolationsRestRequest $request): GetListingViolationsRestResponse
    {
        return $this->getListingViolationsAsync($request)->wait();
    }

    /**
     * @param  GetListingViolationsRestRequest  $request
     * @return PromiseInterface
     */
    public function getListingViolationsAsync(GetListingViolationsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetListingViolations', $request);
    }
}
