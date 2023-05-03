<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Services;

use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemByLegacyIdRestRequest;
use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemByLegacyIdRestResponse;
use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemRestRequest;
use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemRestResponse;
use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemsByItemGroupRestRequest;
use SapientPro\EbayTraditionalSDK\Browse\Types\GetItemsByItemGroupRestResponse;
use SapientPro\EbayTraditionalSDK\Browse\Types\SearchForItemsRestRequest;
use SapientPro\EbayTraditionalSDK\Browse\Types\SearchForItemsRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class BrowseService extends BrowseBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetItem'             => [
                'method'        => 'GET',
                'resource'      => 'item/{item_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Browse\Types\GetItemRestResponse',
                'params'        => [
                    'item_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetItemByLegacyId'   => [
                'method'        => 'GET',
                'resource'      => 'item/get_item_by_legacy_id',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Browse\Types\GetItemByLegacyIdRestResponse',
                'params'        => [
                    'legacy_item_id'       => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'legacy_variation_id'  => [
                        'valid' => ['string'],
                    ],
                    'legacy_variation_sku' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetItemsByItemGroup' => [
                'method'        => 'GET',
                'resource'      => 'item/get_items_by_item_group',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Browse\Types\GetItemsByItemGroupRestResponse',
                'params'        => [
                    'item_group_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SearchForItems'      => [
                'method'        => 'GET',
                'resource'      => 'item_summary/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Browse\Types\SearchForItemsRestResponse',
                'params'        => [
                    'aspect_filter' => [
                        'valid' => ['string'],
                    ],
                    'category_ids'  => [
                        'valid' => ['string'],
                    ],
                    'epid'          => [
                        'valid' => ['string'],
                    ],
                    'fieldgroups'   => [
                        'valid' => ['string'],
                    ],
                    'filter'        => [
                        'valid' => ['string'],
                    ],
                    'gtin'          => [
                        'valid' => ['string'],
                    ],
                    'limit'         => [
                        'valid' => ['string'],
                    ],
                    'offset'        => [
                        'valid' => ['string'],
                    ],
                    'q'             => [
                        'valid' => ['string'],
                    ],
                    'sort'          => [
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

    public function getItem(GetItemRestRequest $request): GetItemRestResponse
    {
        return $this->getItemAsync($request)->wait();
    }

    public function getItemAsync(GetItemRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItem', $request);
    }

    public function getItemByLegacyId(GetItemByLegacyIdRestRequest $request): GetItemByLegacyIdRestResponse
    {
        return $this->getItemByLegacyIdAsync($request)->wait();
    }

    public function getItemByLegacyIdAsync(GetItemByLegacyIdRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItemByLegacyId', $request);
    }

    public function getItemsByItemGroup(GetItemsByItemGroupRestRequest $request): GetItemsByItemGroupRestResponse
    {
        return $this->getItemsByItemGroupAsync($request)->wait();
    }

    public function getItemsByItemGroupAsync(GetItemsByItemGroupRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItemsByItemGroup', $request);
    }

    public function searchForItems(SearchForItemsRestRequest $request): SearchForItemsRestResponse
    {
        return $this->searchForItemsAsync($request)->wait();
    }

    public function searchForItemsAsync(SearchForItemsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SearchForItems', $request);
    }
}
