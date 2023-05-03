<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Services;

use SapientPro\EbayTraditionalSDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAnOrderRestRequest;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAnOrderRestResponse;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetOrdersRestRequest;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetOrdersRestResponse;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest;
use SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FulfillmentService extends FulfillmentBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetOrders'                  => [
                'method'        => 'GET',
                'resource'      => 'order',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetOrdersRestResponse',
                'params'        => [
                    'filter'   => [
                        'valid' => ['string'],
                    ],
                    'limit'    => [
                        'valid' => ['string'],
                    ],
                    'offset'   => [
                        'valid' => ['string'],
                    ],
                    'orderIds' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetAnOrder'                 => [
                'method'        => 'GET',
                'resource'      => 'order/{orderId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAnOrderRestResponse',
                'params'        => [
                    'orderId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateAShippingFulfillment' => [
                'method'        => 'POST',
                'resource'      => 'order/{orderId}/shipping_fulfillment',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse',
                'params'        => [
                    'orderId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetShippingFulfillments'    => [
                'method'        => 'GET',
                'resource'      => 'order/{orderId}/shipping_fulfillment',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse',
                'params'        => [
                    'orderId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAShippingFulfillment'    => [
                'method'        => 'GET',
                'resource'      => 'order/{orderId}/shipping_fulfillment/{fulfillmentId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse',
                'params'        => [
                    'fulfillmentId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'orderId'       => [
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
     * @param  GetOrdersRestRequest  $request
     * @return GetOrdersRestResponse
     */
    public function getOrders(GetOrdersRestRequest $request): GetOrdersRestResponse
    {
        return $this->getOrdersAsync($request)->wait();
    }

    /**
     * @param  GetOrdersRestRequest  $request
     * @return PromiseInterface
     */
    public function getOrdersAsync(GetOrdersRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetOrders', $request);
    }

    /**
     * @param  GetAnOrderRestRequest  $request
     * @return GetAnOrderRestResponse
     */
    public function getAnOrder(GetAnOrderRestRequest $request): GetAnOrderRestResponse
    {
        return $this->getAnOrderAsync($request)->wait();
    }

    /**
     * @param  GetAnOrderRestRequest  $request
     * @return PromiseInterface
     */
    public function getAnOrderAsync(GetAnOrderRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAnOrder', $request);
    }

    /**
     * @param  CreateAShippingFulfillmentRestRequest  $request
     * @return CreateAShippingFulfillmentRestResponse
     */
    public function createAShippingFulfillment(
        CreateAShippingFulfillmentRestRequest $request
    ): CreateAShippingFulfillmentRestResponse {
        return $this->createAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param  CreateAShippingFulfillmentRestRequest  $request
     * @return PromiseInterface
     */
    public function createAShippingFulfillmentAsync(CreateAShippingFulfillmentRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateAShippingFulfillment', $request);
    }

    /**
     * @param  GetShippingFulfillmentsRestRequest  $request
     * @return GetShippingFulfillmentsRestResponse
     */
    public function getShippingFulfillments(
        GetShippingFulfillmentsRestRequest $request
    ): GetShippingFulfillmentsRestResponse {
        return $this->getShippingFulfillmentsAsync($request)->wait();
    }

    /**
     * @param  GetShippingFulfillmentsRestRequest  $request
     * @return PromiseInterface
     */
    public function getShippingFulfillmentsAsync(GetShippingFulfillmentsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetShippingFulfillments', $request);
    }

    /**
     * @param  GetAShippingFulfillmentRestRequest  $request
     * @return GetAShippingFulfillmentRestResponse
     */
    public function getAShippingFulfillment(
        GetAShippingFulfillmentRestRequest $request
    ): GetAShippingFulfillmentRestResponse {
        return $this->getAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param  GetAShippingFulfillmentRestRequest  $request
     * @return PromiseInterface
     */
    public function getAShippingFulfillmentAsync(GetAShippingFulfillmentRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAShippingFulfillment', $request);
    }
}
