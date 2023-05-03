<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Analytics\Services;

use SapientPro\EbayTraditionalSDK\Analytics\Types\GetAllSellerProfilesRestResponse;
use SapientPro\EbayTraditionalSDK\Analytics\Types\GetASpecificSellerProfileRestRequest;
use SapientPro\EbayTraditionalSDK\Analytics\Types\GetASpecificSellerProfileRestResponse;
use SapientPro\EbayTraditionalSDK\Analytics\Types\GetTrafficReportRestRequest;
use SapientPro\EbayTraditionalSDK\Analytics\Types\GetTrafficReportRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class AnalyticsService extends AnalyticsBaseService
{
    public const API_VERSION = 'v1';

    protected static array $operations = [
            'GetASpecificSellerProfile' => [
                'method'        => 'GET',
                'resource'      => 'seller_standards_profile/{program}/{cycle}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Analytics\Types\GetASpecificSellerProfileRestResponse',
                'params'        => [
                    'cycle'   => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'program' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAllSellerProfiles'      => [
                'method'        => 'GET',
                'resource'      => 'seller_standards_profile',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Analytics\Types\GetAllSellerProfilesRestResponse',
                'params'        => [
                ],
            ],
            'GetTrafficReport'          => [
                'method'        => 'GET',
                'resource'      => 'traffic_report',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Analytics\Types\GetTrafficReportRestResponse',
                'params'        => [
                    'dimension' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'filter'    => [
                        'valid' => ['string'],
                    ],
                    'metric'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function getASpecificSellerProfile(
        GetASpecificSellerProfileRestRequest $request
    ): GetASpecificSellerProfileRestResponse {
        return $this->getASpecificSellerProfileAsync($request)->wait();
    }

    public function getASpecificSellerProfileAsync(GetASpecificSellerProfileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetASpecificSellerProfile', $request);
    }

    public function getAllSellerProfiles(): GetAllSellerProfilesRestResponse
    {
        return $this->getAllSellerProfilesAsync()->wait();
    }

    public function getAllSellerProfilesAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetAllSellerProfiles');
    }

    public function getTrafficReport(GetTrafficReportRestRequest $request): GetTrafficReportRestResponse
    {
        return $this->getTrafficReportAsync($request)->wait();
    }

    public function getTrafficReportAsync(GetTrafficReportRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetTrafficReport', $request);
    }
}
