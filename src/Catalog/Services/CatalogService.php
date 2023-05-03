<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Services;

use SapientPro\EbayTraditionalSDK\Catalog\Types\CreateChangeRequestRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\CreateChangeRequestRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductRestResponse;
use SapientPro\EbayTraditionalSDK\Catalog\Types\SearchRestRequest;
use SapientPro\EbayTraditionalSDK\Catalog\Types\SearchRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class CatalogService extends CatalogBaseService
{
    public const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetProduct'                      => [
                'method'        => 'GET',
                'resource'      => 'product/{epid}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductRestResponse',
                'params'        => [
                    'epid' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'Search'                          => [
                'method'        => 'GET',
                'resource'      => 'product_summary/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\SearchRestResponse',
                'params'        => [
                    'offset'        => [
                        'valid' => ['string'],
                    ],
                    'limit'         => [
                        'valid' => ['string'],
                    ],
                    'fieldgroups'   => [
                        'valid' => ['string'],
                    ],
                    'aspect_filter' => [
                        'valid' => ['string'],
                    ],
                    'category_ids'  => [
                        'valid' => ['string'],
                    ],
                    'mpn'           => [
                        'valid' => ['string'],
                    ],
                    'gtin'          => [
                        'valid' => ['string'],
                    ],
                    'q'             => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetProductMetadata'              => [
                'method'        => 'GET',
                'resource'      => 'get_product_metadata',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataRestResponse',
                'params'        => [
                    'other_applicable_category_ids' => [
                        'valid' => ['string'],
                    ],
                    'primary_category_id'           => [
                        'valid' => ['string'],
                    ],
                    'epid'                          => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetProductMetadataForCategories' => [
                'method'        => 'GET',
                'resource'      => 'get_product_metadata_for_categories',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse',
                'params'        => [
                    'other_applicable_category_ids' => [
                        'valid' => ['string'],
                    ],
                    'primary_category_id'           => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetChangeRequest'                => [
                'method'        => 'GET',
                'resource'      => 'change_request/{change_request_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestRestResponse',
                'params'        => [
                    'change_request_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetChangeRequests'               => [
                'method'        => 'GET',
                'resource'      => 'change_request',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\GetChangeRequestsRestResponse',
                'params'        => [
                    'offset' => [
                        'valid' => ['string'],
                    ],
                    'limit'  => [
                        'valid' => ['string'],
                    ],
                    'filter' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'CreateChangeRequest'             => [
                'method'        => 'PUT',
                'resource'      => 'change_request',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Catalog\Types\CreateChangeRequestRestResponse',
                'params'        => [
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
     * @param  GetProductRestRequest  $request
     * @return GetProductRestResponse
     */
    public function getProduct(GetProductRestRequest $request): GetProductRestResponse
    {
        return $this->getProductAsync($request)->wait();
    }

    /**
     * @param  GetProductRestRequest  $request
     * @return PromiseInterface
     */
    public function getProductAsync(GetProductRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetProduct', $request);
    }

    /**
     * @param  SearchRestRequest  $request
     * @return SearchRestResponse
     */
    public function search(SearchRestRequest $request): SearchRestResponse
    {
        return $this->searchAsync($request)->wait();
    }

    /**
     * @param  SearchRestRequest  $request
     * @return PromiseInterface
     */
    public function searchAsync(SearchRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('Search', $request);
    }

    /**
     * @param  GetProductMetadataRestRequest  $request
     * @return GetProductMetadataRestResponse
     */
    public function getProductMetadata(GetProductMetadataRestRequest $request): GetProductMetadataRestResponse
    {
        return $this->getProductMetadataAsync($request)->wait();
    }

    /**
     * @param  GetProductMetadataRestRequest  $request
     * @return PromiseInterface
     */
    public function getProductMetadataAsync(GetProductMetadataRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetProductMetadata', $request);
    }

    /**
     * @param  GetProductMetadataForCategoriesRestRequest  $request
     * @return GetProductMetadataForCategoriesRestResponse
     */
    public function getProductMetadataForCategories(
        GetProductMetadataForCategoriesRestRequest $request
    ): GetProductMetadataForCategoriesRestResponse {
        return $this->getProductMetadataForCategoriesAsync($request)->wait();
    }

    /**
     * @param  GetProductMetadataForCategoriesRestRequest  $request
     * @return PromiseInterface
     */
    public function getProductMetadataForCategoriesAsync(
        GetProductMetadataForCategoriesRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetProductMetadataForCategories', $request);
    }

    /**
     * @param  GetChangeRequestRestRequest  $request
     * @return GetChangeRequestRestResponse
     */
    public function getChangeRequest(GetChangeRequestRestRequest $request): GetChangeRequestRestResponse
    {
        return $this->getChangeRequestAsync($request)->wait();
    }

    /**
     * @param  GetChangeRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function getChangeRequestAsync(GetChangeRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetChangeRequest', $request);
    }

    /**
     * @param  GetChangeRequestsRestRequest  $request
     * @return GetChangeRequestsRestResponse
     */
    public function getChangeRequests(GetChangeRequestsRestRequest $request): GetChangeRequestsRestResponse
    {
        return $this->getChangeRequestsAsync($request)->wait();
    }

    /**
     * @param  GetChangeRequestsRestRequest  $request
     * @return PromiseInterface
     */
    public function getChangeRequestsAsync(GetChangeRequestsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetChangeRequests', $request);
    }

    /**
     * @param  CreateChangeRequestRestRequest  $request
     * @return CreateChangeRequestRestResponse
     */
    public function createChangeRequest(CreateChangeRequestRestRequest $request): CreateChangeRequestRestResponse
    {
        return $this->createChangeRequestAsync($request)->wait();
    }

    /**
     * @param  CreateChangeRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function createChangeRequestAsync(CreateChangeRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateChangeRequest', $request);
    }
}
