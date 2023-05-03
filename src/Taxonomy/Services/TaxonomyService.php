<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Taxonomy\Services;

use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategorySubtreeRestRequest;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategorySubtreeRestResponse;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategoryTreeRestRequest;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategoryTreeRestResponse;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest;
use SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class TaxonomyService extends TaxonomyBaseService
{
    public const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetADefaultCategoryTreeId' => [
                'method'        => 'GET',
                'resource'      => 'get_default_category_tree_id',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetACategoryTree'          => [
                'method'        => 'GET',
                'resource'      => 'category_tree/{category_tree_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategoryTreeRestResponse',
                'params'        => [
                    'category_tree_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetACategorySubtree'       => [
                'method'        => 'GET',
                'resource'      => 'category_tree/{category_tree_id}/get_category_subtree',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetACategorySubtreeRestResponse',
                'params'        => [
                    'category_id'      => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'category_tree_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetSuggestedCategories'    => [
                'method'        => 'GET',
                'resource'      => 'category_tree/{category_tree_id}/get_category_suggestions',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse',
                'params'        => [
                    'category_tree_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'q'                => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetItemAspectsForCategory' => [
                'method'        => 'GET',
                'resource'      => 'category_tree/{category_tree_id}/get_item_aspects_for_category',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse',
                'params'        => [
                    'category_id'      => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'category_tree_id' => [
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
     * @param  GetADefaultCategoryTreeIdRestRequest  $request
     * @return GetADefaultCategoryTreeIdRestResponse
     */
    public function getADefaultCategoryTreeId(
        GetADefaultCategoryTreeIdRestRequest $request
    ): GetADefaultCategoryTreeIdRestResponse {
        return $this->getADefaultCategoryTreeIdAsync($request)->wait();
    }

    /**
     * @param  GetADefaultCategoryTreeIdRestRequest  $request
     * @return PromiseInterface
     */
    public function getADefaultCategoryTreeIdAsync(GetADefaultCategoryTreeIdRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetADefaultCategoryTreeId', $request);
    }

    /**
     * @param  GetACategoryTreeRestRequest  $request
     * @return GetACategoryTreeRestResponse
     */
    public function getACategoryTree(GetACategoryTreeRestRequest $request): GetACategoryTreeRestResponse
    {
        return $this->getACategoryTreeAsync($request)->wait();
    }

    /**
     * @param  GetACategoryTreeRestRequest  $request
     * @return PromiseInterface
     */
    public function getACategoryTreeAsync(GetACategoryTreeRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetACategoryTree', $request);
    }

    /**
     * @param  GetACategorySubtreeRestRequest  $request
     * @return GetACategorySubtreeRestResponse
     */
    public function getACategorySubtree(GetACategorySubtreeRestRequest $request): GetACategorySubtreeRestResponse
    {
        return $this->getACategorySubtreeAsync($request)->wait();
    }

    /**
     * @param  GetACategorySubtreeRestRequest  $request
     * @return PromiseInterface
     */
    public function getACategorySubtreeAsync(GetACategorySubtreeRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetACategorySubtree', $request);
    }

    /**
     * @param  GetSuggestedCategoriesRestRequest  $request
     * @return GetSuggestedCategoriesRestResponse
     */
    public function getSuggestedCategories(
        GetSuggestedCategoriesRestRequest $request
    ): GetSuggestedCategoriesRestResponse {
        return $this->getSuggestedCategoriesAsync($request)->wait();
    }

    /**
     * @param  GetSuggestedCategoriesRestRequest  $request
     * @return PromiseInterface
     */
    public function getSuggestedCategoriesAsync(GetSuggestedCategoriesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetSuggestedCategories', $request);
    }

    /**
     * @param  GetItemAspectsForCategoryRestRequest  $request
     * @return GetItemAspectsForCategoryRestResponse
     */
    public function getItemAspectsForCategory(
        GetItemAspectsForCategoryRestRequest $request
    ): GetItemAspectsForCategoryRestResponse {
        return $this->getItemAspectsForCategoryAsync($request)->wait();
    }

    /**
     * @param  GetItemAspectsForCategoryRestRequest  $request
     * @return PromiseInterface
     */
    public function getItemAspectsForCategoryAsync(GetItemAspectsForCategoryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItemAspectsForCategory', $request);
    }
}
