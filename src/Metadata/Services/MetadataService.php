<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Metadata\Services;

use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForItemConditionRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForItemConditionRestResponse;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForReturnsRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForReturnsRestResponse;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest;
use SapientPro\EbayTraditionalSDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class MetadataService extends MetadataBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetSalesTaxJurisdictions'             => [
                'method'        => 'GET',
                'resource'      => 'country/{countryCode}/sales_tax_jurisdiction',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse',
                'params'        => [
                    'countryCode' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPoliciesForAutoPartsCompatibility' => [
                'method'        => 'GET',
                'resource'      => 'marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse',
                'params'        => [
                    'filter'         => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPoliciesForItemCondition'          => [
                'method'        => 'GET',
                'resource'      => 'marketplace/{marketplace_id}/get_item_condition_policies',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForItemConditionRestResponse',
                'params'        => [
                    'filter'         => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPoliciesForListingStructures'      => [
                'method'        => 'GET',
                'resource'      => 'marketplace/{marketplace_id}/get_listing_structure_policies',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse',
                'params'        => [
                    'filter'         => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPoliciesForNegotiatedPrice'        => [
                'method'        => 'GET',
                'resource'      => 'marketplace/{marketplace_id}/get_negotiated_price_policies',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse',
                'params'        => [
                    'filter'         => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPoliciesForReturns'                => [
                'method'        => 'GET',
                'resource'      => 'marketplace/{marketplace_id}/get_return_policies',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Metadata\Types\GetPoliciesForReturnsRestResponse',
                'params'        => [
                    'filter'         => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
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
     * @param  GetSalesTaxJurisdictionsRestRequest  $request
     * @return GetSalesTaxJurisdictionsRestResponse
     */
    public function getSalesTaxJurisdictions(
        GetSalesTaxJurisdictionsRestRequest $request
    ): GetSalesTaxJurisdictionsRestResponse {
        return $this->getSalesTaxJurisdictionsAsync($request)->wait();
    }

    /**
     * @param  GetSalesTaxJurisdictionsRestRequest  $request
     * @return PromiseInterface
     */
    public function getSalesTaxJurisdictionsAsync(GetSalesTaxJurisdictionsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetSalesTaxJurisdictions', $request);
    }

    /**
     * @param  GetPoliciesForAutoPartsCompatibilityRestRequest  $request
     * @return GetPoliciesForAutoPartsCompatibilityRestResponse
     */
    public function getPoliciesForAutoPartsCompatibility(
        GetPoliciesForAutoPartsCompatibilityRestRequest $request
    ): GetPoliciesForAutoPartsCompatibilityRestResponse {
        return $this->getPoliciesForAutoPartsCompatibilityAsync($request)->wait();
    }

    /**
     * @param  GetPoliciesForAutoPartsCompatibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function getPoliciesForAutoPartsCompatibilityAsync(
        GetPoliciesForAutoPartsCompatibilityRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetPoliciesForAutoPartsCompatibility', $request);
    }

    /**
     * @param  GetPoliciesForItemConditionRestRequest  $request
     * @return GetPoliciesForItemConditionRestResponse
     */
    public function getPoliciesForItemCondition(
        GetPoliciesForItemConditionRestRequest $request
    ): GetPoliciesForItemConditionRestResponse {
        return $this->getPoliciesForItemConditionAsync($request)->wait();
    }

    /**
     * @param  GetPoliciesForItemConditionRestRequest  $request
     * @return PromiseInterface
     */
    public function getPoliciesForItemConditionAsync(GetPoliciesForItemConditionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetPoliciesForItemCondition', $request);
    }

    /**
     * @param  GetPoliciesForListingStructuresRestRequest  $request
     * @return GetPoliciesForListingStructuresRestResponse
     */
    public function getPoliciesForListingStructures(
        GetPoliciesForListingStructuresRestRequest $request
    ): GetPoliciesForListingStructuresRestResponse {
        return $this->getPoliciesForListingStructuresAsync($request)->wait();
    }

    /**
     * @param  GetPoliciesForListingStructuresRestRequest  $request
     * @return PromiseInterface
     */
    public function getPoliciesForListingStructuresAsync(
        GetPoliciesForListingStructuresRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetPoliciesForListingStructures', $request);
    }

    /**
     * @param  GetPoliciesForNegotiatedPriceRestRequest  $request
     * @return GetPoliciesForNegotiatedPriceRestResponse
     */
    public function getPoliciesForNegotiatedPrice(
        GetPoliciesForNegotiatedPriceRestRequest $request
    ): GetPoliciesForNegotiatedPriceRestResponse {
        return $this->getPoliciesForNegotiatedPriceAsync($request)->wait();
    }

    /**
     * @param  GetPoliciesForNegotiatedPriceRestRequest  $request
     * @return PromiseInterface
     */
    public function getPoliciesForNegotiatedPriceAsync(
        GetPoliciesForNegotiatedPriceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetPoliciesForNegotiatedPrice', $request);
    }

    /**
     * @param  GetPoliciesForReturnsRestRequest  $request
     * @return GetPoliciesForReturnsRestResponse
     */
    public function getPoliciesForReturns(GetPoliciesForReturnsRestRequest $request): GetPoliciesForReturnsRestResponse
    {
        return $this->getPoliciesForReturnsAsync($request)->wait();
    }

    /**
     * @param  GetPoliciesForReturnsRestRequest  $request
     * @return PromiseInterface
     */
    public function getPoliciesForReturnsAsync(GetPoliciesForReturnsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetPoliciesForReturns', $request);
    }
}
