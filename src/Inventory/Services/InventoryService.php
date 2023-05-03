<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Services;

use SapientPro\EbayTraditionalSDK\Inventory\Types\BulkMigrateListingsRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\BulkMigrateListingsRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOfferRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemGroupRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemGroupRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteOfferRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteProductCompatibilityRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteProductCompatibilityRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DisableInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\DisableInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\EnableInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\EnableInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemGroupRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemGroupRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemsRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemsRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationsRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationsRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetListingFeesRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetListingFeesRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetOfferRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetOffersRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetOffersRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetProductCompatibilityRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\GetProductCompatibilityRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateInventoryLocationRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateInventoryLocationRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateOfferRestResponse;
use SapientPro\EbayTraditionalSDK\Inventory\Types\WithdrawOfferRestRequest;
use SapientPro\EbayTraditionalSDK\Inventory\Types\WithdrawOfferRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class InventoryService extends InventoryBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'BulkUpdatePriceAndQuantity'          => [
                'method'        => 'POST',
                'resource'      => 'bulk_update_price_quantity',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse',
                'params'        => [
                ],
            ],
            'CreateOrReplaceInventoryItem'        => [
                'method'        => 'PUT',
                'resource'      => 'inventory_item/{sku}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteInventoryItem'                 => [
                'method'        => 'DELETE',
                'resource'      => 'inventory_item/{sku}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInventoryItem'                    => [
                'method'        => 'GET',
                'resource'      => 'inventory_item/{sku}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInventoryItems'                   => [
                'method'        => 'GET',
                'resource'      => 'inventory_item',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemsRestResponse',
                'params'        => [
                    'limit'  => [
                        'valid' => ['string'],
                    ],
                    'offset' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'CreateOrReplaceInventoryItemGroup'   => [
                'method'        => 'PUT',
                'resource'      => 'inventory_item_group/{inventoryItemGroupKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse',
                'params'        => [
                    'inventoryItemGroupKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteInventoryItemGroup'            => [
                'method'        => 'DELETE',
                'resource'      => 'inventory_item_group/{inventoryItemGroupKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryItemGroupRestResponse',
                'params'        => [
                    'inventoryItemGroupKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInventoryItemGroup'               => [
                'method'        => 'GET',
                'resource'      => 'inventory_item_group/{inventoryItemGroupKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryItemGroupRestResponse',
                'params'        => [
                    'inventoryItemGroupKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkMigrateListings'                 => [
                'method'        => 'POST',
                'resource'      => 'bulk_migrate_listing',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\BulkMigrateListingsRestResponse',
                'params'        => [
                ],
            ],
            'CreateInventoryLocation'             => [
                'method'        => 'POST',
                'resource'      => 'location/{merchantLocationKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\CreateInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteInventoryLocation'             => [
                'method'        => 'DELETE',
                'resource'      => 'location/{merchantLocationKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DisableInventoryLocation'            => [
                'method'        => 'POST',
                'resource'      => 'location/{merchantLocationKey}/disable',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DisableInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'EnableInventoryLocation'             => [
                'method'        => 'POST',
                'resource'      => 'location/{merchantLocationKey}/enable',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\EnableInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInventoryLocation'                => [
                'method'        => 'GET',
                'resource'      => 'location/{merchantLocationKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInventoryLocations'               => [
                'method'        => 'GET',
                'resource'      => 'location',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetInventoryLocationsRestResponse',
                'params'        => [
                    'limit'  => [
                        'valid' => ['string'],
                    ],
                    'offset' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'UpdateInventoryLocation'             => [
                'method'        => 'POST',
                'resource'      => 'location/{merchantLocationKey}/update_location_details',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateInventoryLocationRestResponse',
                'params'        => [
                    'merchantLocationKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateOffer'                         => [
                'method'        => 'POST',
                'resource'      => 'offer',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOfferRestResponse',
                'params'        => [
                ],
            ],
            'DeleteOffer'                         => [
                'method'        => 'DELETE',
                'resource'      => 'offer/{offerId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteOfferRestResponse',
                'params'        => [
                    'offerId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetListingFees'                      => [
                'method'        => 'POST',
                'resource'      => 'offer/get_listing_fees',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetListingFeesRestResponse',
                'params'        => [
                ],
            ],
            'GetOffer'                            => [
                'method'        => 'GET',
                'resource'      => 'offer/{offerId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetOfferRestResponse',
                'params'        => [
                    'offerId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetOffers'                           => [
                'method'        => 'GET',
                'resource'      => 'offer',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetOffersRestResponse',
                'params'        => [
                    'format'         => [
                        'valid' => ['string'],
                    ],
                    'limit'          => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id' => [
                        'valid' => ['string'],
                    ],
                    'offset'         => [
                        'valid' => ['string'],
                    ],
                    'sku'            => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'PublishOffer'                        => [
                'method'        => 'POST',
                'resource'      => 'offer/{offerId}/publish',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferRestResponse',
                'params'        => [
                    'offerId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'WithdrawOffer'                       => [
                'method'        => 'POST',
                'resource'      => 'offer/{offerId}/withdraw',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\WithdrawOfferRestResponse',
                'params'        => [
                    'offerId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateOffer'                         => [
                'method'        => 'PUT',
                'resource'      => 'offer/{offerId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\UpdateOfferRestResponse',
                'params'        => [
                    'offerId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateOrReplaceProductCompatibility' => [
                'method'        => 'PUT',
                'resource'      => 'inventory_item/{sku}/product_compatibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteProductCompatibility'          => [
                'method'        => 'DELETE',
                'resource'      => 'inventory_item/{sku}/product_compatibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\DeleteProductCompatibilityRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetProductCompatibility'             => [
                'method'        => 'GET',
                'resource'      => 'inventory_item/{sku}/product_compatibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\GetProductCompatibilityRestResponse',
                'params'        => [
                    'sku' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'PublishOfferByInventoryItemGroup'    => [
                'method'        => 'POST',
                'resource'      => 'offer/publish_by_inventory_item_group',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse',
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
     * @param  BulkUpdatePriceAndQuantityRestRequest  $request
     * @return BulkUpdatePriceAndQuantityRestResponse
     */
    public function bulkUpdatePriceAndQuantity(
        BulkUpdatePriceAndQuantityRestRequest $request
    ): BulkUpdatePriceAndQuantityRestResponse {
        return $this->bulkUpdatePriceAndQuantityAsync($request)->wait();
    }

    /**
     * @param  BulkUpdatePriceAndQuantityRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkUpdatePriceAndQuantityAsync(BulkUpdatePriceAndQuantityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('BulkUpdatePriceAndQuantity', $request);
    }

    /**
     * @param  CreateOrReplaceInventoryItemRestRequest  $request
     * @return CreateOrReplaceInventoryItemRestResponse
     */
    public function createOrReplaceInventoryItem(
        CreateOrReplaceInventoryItemRestRequest $request
    ): CreateOrReplaceInventoryItemRestResponse {
        return $this->createOrReplaceInventoryItemAsync($request)->wait();
    }

    /**
     * @param  CreateOrReplaceInventoryItemRestRequest  $request
     * @return PromiseInterface
     */
    public function createOrReplaceInventoryItemAsync(
        CreateOrReplaceInventoryItemRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CreateOrReplaceInventoryItem', $request);
    }

    /**
     * @param  DeleteInventoryItemRestRequest  $request
     * @return DeleteInventoryItemRestResponse
     */
    public function deleteInventoryItem(DeleteInventoryItemRestRequest $request): DeleteInventoryItemRestResponse
    {
        return $this->deleteInventoryItemAsync($request)->wait();
    }

    /**
     * @param  DeleteInventoryItemRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteInventoryItemAsync(DeleteInventoryItemRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteInventoryItem', $request);
    }

    /**
     * @param  GetInventoryItemRestRequest  $request
     * @return GetInventoryItemRestResponse
     */
    public function getInventoryItem(GetInventoryItemRestRequest $request): GetInventoryItemRestResponse
    {
        return $this->getInventoryItemAsync($request)->wait();
    }

    /**
     * @param  GetInventoryItemRestRequest  $request
     * @return PromiseInterface
     */
    public function getInventoryItemAsync(GetInventoryItemRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInventoryItem', $request);
    }

    /**
     * @param  GetInventoryItemsRestRequest  $request
     * @return GetInventoryItemsRestResponse
     */
    public function getInventoryItems(GetInventoryItemsRestRequest $request): GetInventoryItemsRestResponse
    {
        return $this->getInventoryItemsAsync($request)->wait();
    }

    /**
     * @param  GetInventoryItemsRestRequest  $request
     * @return PromiseInterface
     */
    public function getInventoryItemsAsync(GetInventoryItemsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInventoryItems', $request);
    }

    /**
     * @param  CreateOrReplaceInventoryItemGroupRestRequest  $request
     * @return CreateOrReplaceInventoryItemGroupRestResponse
     */
    public function createOrReplaceInventoryItemGroup(
        CreateOrReplaceInventoryItemGroupRestRequest $request
    ): CreateOrReplaceInventoryItemGroupRestResponse {
        return $this->createOrReplaceInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param  CreateOrReplaceInventoryItemGroupRestRequest  $request
     * @return PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsync(
        CreateOrReplaceInventoryItemGroupRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CreateOrReplaceInventoryItemGroup', $request);
    }

    /**
     * @param  DeleteInventoryItemGroupRestRequest  $request
     * @return DeleteInventoryItemGroupRestResponse
     */
    public function deleteInventoryItemGroup(
        DeleteInventoryItemGroupRestRequest $request
    ): DeleteInventoryItemGroupRestResponse {
        return $this->deleteInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param  DeleteInventoryItemGroupRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteInventoryItemGroupAsync(DeleteInventoryItemGroupRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteInventoryItemGroup', $request);
    }

    /**
     * @param  GetInventoryItemGroupRestRequest  $request
     * @return GetInventoryItemGroupRestResponse
     */
    public function getInventoryItemGroup(GetInventoryItemGroupRestRequest $request): GetInventoryItemGroupRestResponse
    {
        return $this->getInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param  GetInventoryItemGroupRestRequest  $request
     * @return PromiseInterface
     */
    public function getInventoryItemGroupAsync(GetInventoryItemGroupRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInventoryItemGroup', $request);
    }

    /**
     * @param  BulkMigrateListingsRestRequest  $request
     * @return BulkMigrateListingsRestResponse
     */
    public function bulkMigrateListings(BulkMigrateListingsRestRequest $request): BulkMigrateListingsRestResponse
    {
        return $this->bulkMigrateListingsAsync($request)->wait();
    }

    /**
     * @param  BulkMigrateListingsRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkMigrateListingsAsync(BulkMigrateListingsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('BulkMigrateListings', $request);
    }

    /**
     * @param  CreateInventoryLocationRestRequest  $request
     * @return CreateInventoryLocationRestResponse
     */
    public function createInventoryLocation(
        CreateInventoryLocationRestRequest $request
    ): CreateInventoryLocationRestResponse {
        return $this->createInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  CreateInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function createInventoryLocationAsync(
        CreateInventoryLocationRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CreateInventoryLocation', $request);
    }

    /**
     * @param  DeleteInventoryLocationRestRequest  $request
     * @return DeleteInventoryLocationRestResponse
     */
    public function deleteInventoryLocation(
        DeleteInventoryLocationRestRequest $request
    ): DeleteInventoryLocationRestResponse {
        return $this->deleteInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  DeleteInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteInventoryLocationAsync(
        DeleteInventoryLocationRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('DeleteInventoryLocation', $request);
    }

    /**
     * @param  DisableInventoryLocationRestRequest  $request
     * @return DisableInventoryLocationRestResponse
     */
    public function disableInventoryLocation(
        DisableInventoryLocationRestRequest $request
    ): DisableInventoryLocationRestResponse {
        return $this->disableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  DisableInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function disableInventoryLocationAsync(DisableInventoryLocationRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DisableInventoryLocation', $request);
    }

    /**
     * @param  EnableInventoryLocationRestRequest  $request
     * @return EnableInventoryLocationRestResponse
     */
    public function enableInventoryLocation(
        EnableInventoryLocationRestRequest $request
    ): EnableInventoryLocationRestResponse {
        return $this->enableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  EnableInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function enableInventoryLocationAsync(
        EnableInventoryLocationRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('EnableInventoryLocation', $request);
    }

    /**
     * @param  GetInventoryLocationRestRequest  $request
     * @return GetInventoryLocationRestResponse
     */
    public function getInventoryLocation(
        GetInventoryLocationRestRequest $request
    ): GetInventoryLocationRestResponse {
        return $this->getInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  GetInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function getInventoryLocationAsync(GetInventoryLocationRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInventoryLocation', $request);
    }

    /**
     * @param  GetInventoryLocationsRestRequest  $request
     * @return GetInventoryLocationsRestResponse
     */
    public function getInventoryLocations(GetInventoryLocationsRestRequest $request): GetInventoryLocationsRestResponse
    {
        return $this->getInventoryLocationsAsync($request)->wait();
    }

    /**
     * @param  GetInventoryLocationsRestRequest  $request
     * @return PromiseInterface
     */
    public function getInventoryLocationsAsync(GetInventoryLocationsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInventoryLocations', $request);
    }

    /**
     * @param  UpdateInventoryLocationRestRequest  $request
     * @return UpdateInventoryLocationRestResponse
     */
    public function updateInventoryLocation(
        UpdateInventoryLocationRestRequest $request
    ): UpdateInventoryLocationRestResponse {
        return $this->updateInventoryLocationAsync($request)->wait();
    }

    /**
     * @param  UpdateInventoryLocationRestRequest  $request
     * @return PromiseInterface
     */
    public function updateInventoryLocationAsync(UpdateInventoryLocationRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateInventoryLocation', $request);
    }

    /**
     * @param  CreateOfferRestRequest  $request
     * @return CreateOfferRestResponse
     */
    public function createOffer(CreateOfferRestRequest $request): CreateOfferRestResponse
    {
        return $this->createOfferAsync($request)->wait();
    }

    /**
     * @param  CreateOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function createOfferAsync(CreateOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateOffer', $request);
    }

    /**
     * @param  DeleteOfferRestRequest  $request
     * @return DeleteOfferRestResponse
     */
    public function deleteOffer(DeleteOfferRestRequest $request): DeleteOfferRestResponse
    {
        return $this->deleteOfferAsync($request)->wait();
    }

    /**
     * @param  DeleteOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteOfferAsync(DeleteOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteOffer', $request);
    }

    /**
     * @param  GetListingFeesRestRequest  $request
     * @return GetListingFeesRestResponse
     */
    public function getListingFees(GetListingFeesRestRequest $request): GetListingFeesRestResponse
    {
        return $this->getListingFeesAsync($request)->wait();
    }

    /**
     * @param  GetListingFeesRestRequest  $request
     * @return PromiseInterface
     */
    public function getListingFeesAsync(GetListingFeesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetListingFees', $request);
    }

    /**
     * @param  GetOfferRestRequest  $request
     * @return GetOfferRestResponse
     */
    public function getOffer(GetOfferRestRequest $request): GetOfferRestResponse
    {
        return $this->getOfferAsync($request)->wait();
    }

    /**
     * @param  GetOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function getOfferAsync(GetOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetOffer', $request);
    }

    /**
     * @param  GetOffersRestRequest  $request
     * @return GetOffersRestResponse
     */
    public function getOffers(GetOffersRestRequest $request): GetOffersRestResponse
    {
        return $this->getOffersAsync($request)->wait();
    }

    /**
     * @param  GetOffersRestRequest  $request
     * @return PromiseInterface
     */
    public function getOffersAsync(GetOffersRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetOffers', $request);
    }

    /**
     * @param  PublishOfferRestRequest  $request
     * @return PublishOfferRestResponse
     */
    public function publishOffer(PublishOfferRestRequest $request): PublishOfferRestResponse
    {
        return $this->publishOfferAsync($request)->wait();
    }

    /**
     * @param  PublishOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function publishOfferAsync(PublishOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('PublishOffer', $request);
    }

    /**
     * @param  WithdrawOfferRestRequest  $request
     * @return WithdrawOfferRestResponse
     */
    public function withdrawOffer(WithdrawOfferRestRequest $request): WithdrawOfferRestResponse
    {
        return $this->withdrawOfferAsync($request)->wait();
    }

    /**
     * @param  WithdrawOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function withdrawOfferAsync(WithdrawOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('WithdrawOffer', $request);
    }

    /**
     * @param  UpdateOfferRestRequest  $request
     * @return UpdateOfferRestResponse
     */
    public function updateOffer(UpdateOfferRestRequest $request): UpdateOfferRestResponse
    {
        return $this->updateOfferAsync($request)->wait();
    }

    /**
     * @param  UpdateOfferRestRequest  $request
     * @return PromiseInterface
     */
    public function updateOfferAsync(UpdateOfferRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateOffer', $request);
    }

    /**
     * @param  CreateOrReplaceProductCompatibilityRestRequest  $request
     * @return CreateOrReplaceProductCompatibilityRestResponse
     */
    public function createOrReplaceProductCompatibility(
        CreateOrReplaceProductCompatibilityRestRequest $request
    ): CreateOrReplaceProductCompatibilityRestResponse {
        return $this->createOrReplaceProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param  CreateOrReplaceProductCompatibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function createOrReplaceProductCompatibilityAsync(
        CreateOrReplaceProductCompatibilityRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CreateOrReplaceProductCompatibility', $request);
    }

    /**
     * @param  DeleteProductCompatibilityRestRequest  $request
     * @return DeleteProductCompatibilityRestResponse
     */
    public function deleteProductCompatibility(
        DeleteProductCompatibilityRestRequest $request
    ): DeleteProductCompatibilityRestResponse {
        return $this->deleteProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param  DeleteProductCompatibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteProductCompatibilityAsync(DeleteProductCompatibilityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteProductCompatibility', $request);
    }

    /**
     * @param  GetProductCompatibilityRestRequest  $request
     * @return GetProductCompatibilityRestResponse
     */
    public function getProductCompatibility(
        GetProductCompatibilityRestRequest $request
    ): GetProductCompatibilityRestResponse {
        return $this->getProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param  GetProductCompatibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function getProductCompatibilityAsync(GetProductCompatibilityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetProductCompatibility', $request);
    }

    /**
     * @param  PublishOfferByInventoryItemGroupRestRequest  $request
     * @return PublishOfferByInventoryItemGroupRestResponse
     */
    public function publishOfferByInventoryItemGroup(
        PublishOfferByInventoryItemGroupRestRequest $request
    ): PublishOfferByInventoryItemGroupRestResponse {
        return $this->publishOfferByInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param  PublishOfferByInventoryItemGroupRestRequest  $request
     * @return PromiseInterface
     */
    public function publishOfferByInventoryItemGroupAsync(
        PublishOfferByInventoryItemGroupRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('PublishOfferByInventoryItemGroup', $request);
    }
}
