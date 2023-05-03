<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Order\Services;

use SapientPro\EbayTraditionalSDK\Order\Types\GetCheckoutSessionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\GetCheckoutSessionRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\GetGuestCheckoutSessionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\GetGuestCheckoutSessionRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\GetGuestPurchaseOrderRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\GetGuestPurchaseOrderRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\GetPurchaseOrderRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\GetPurchaseOrderRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\InitiateCheckoutSessionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\InitiateCheckoutSessionRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\InitiateGuestCheckoutSessionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\InitiateGuestCheckoutSessionRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\PlaceGuestOrderRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\PlaceGuestOrderRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\PlaceOrderRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\PlaceOrderRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemQuantityRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemQuantityRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestPaymentInfoRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestPaymentInfoRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestShippingOptionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestShippingOptionRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdatePaymentInfoRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdatePaymentInfoRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateQuantityForLineItemRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateQuantityForLineItemRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingAddressRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingAddressRestResponse;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOptionRestRequest;
use SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOptionRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class OrderService extends OrderBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetCheckoutSession'                 => [
                'method'        => 'GET',
                'resource'      => 'checkout_session/{checkoutSessionId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\GetCheckoutSessionRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'InitiateCheckoutSession'            => [
                'method'        => 'POST',
                'resource'      => 'checkout_session/initiate',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\InitiateCheckoutSessionRestResponse',
                'params'        => [
                ],
            ],
            'PlaceOrder'                         => [
                'method'        => 'POST',
                'resource'      => 'checkout_session/{checkoutSessionId}/place_order',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\PlaceOrderRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdatePaymentInfo'                  => [
                'method'        => 'POST',
                'resource'      => 'checkout_session/{checkoutSessionId}/update_payment_info',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdatePaymentInfoRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateQuantityForLineItem'          => [
                'method'        => 'POST',
                'resource'      => 'checkout_session/{checkoutSessionId}/update_quantity',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateQuantityForLineItemRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateShippingAddress'              => [
                'method'        => 'POST',
                'resource'      => '_session/{checkoutSessionId}/update_shipping_address',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingAddressRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateShippingOption'               => [
                'method'        => 'POST',
                'resource'      => 'checkout_session/{checkoutSessionId}/update_shipping_option',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateShippingOptionRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetGuestCheckoutSession'            => [
                'method'        => 'GET',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\GetGuestCheckoutSessionRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'InitiateGuestCheckoutSession'       => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/initiate',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\InitiateGuestCheckoutSessionRestResponse',
                'params'        => [
                ],
            ],
            'PlaceGuestOrder'                    => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}/place_order',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\PlaceGuestOrderRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateGuestLineItemQuantity'        => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}/update_quantity',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemQuantityRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateGuestLineItemShippingAddress' => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}/update_shipping_address',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateGuestPaymentInfo'             => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}/update_payment_info',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestPaymentInfoRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateGuestShippingOption'          => [
                'method'        => 'POST',
                'resource'      => 'guest_checkout_session/{checkoutSessionId}/update_shipping_option',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\UpdateGuestShippingOptionRestResponse',
                'params'        => [
                    'checkoutSessionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetGuestPurchaseOrder'              => [
                'method'        => 'GET',
                'resource'      => 'guest_purchase_order/{purchaseOrderId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\GetGuestPurchaseOrderRestResponse',
                'params'        => [
                    'purchaseOrderId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPurchaseOrder'                   => [
                'method'        => 'GET',
                'resource'      => 'purchase_order/{purchaseOrderId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Order\Types\GetPurchaseOrderRestResponse',
                'params'        => [
                    'purchaseOrderId' => [
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
     * @param  GetCheckoutSessionRestRequest  $request
     * @return GetCheckoutSessionRestResponse
     */
    public function getCheckoutSession(GetCheckoutSessionRestRequest $request): GetCheckoutSessionRestResponse
    {
        return $this->getCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param  GetCheckoutSessionRestRequest  $request
     * @return PromiseInterface
     */
    public function getCheckoutSessionAsync(GetCheckoutSessionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetCheckoutSession', $request);
    }

    /**
     * @param  InitiateCheckoutSessionRestRequest  $request
     * @return InitiateCheckoutSessionRestResponse
     */
    public function initiateCheckoutSession(
        InitiateCheckoutSessionRestRequest $request
    ): InitiateCheckoutSessionRestResponse {
        return $this->initiateCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param  InitiateCheckoutSessionRestRequest  $request
     * @return PromiseInterface
     */
    public function initiateCheckoutSessionAsync(InitiateCheckoutSessionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('InitiateCheckoutSession', $request);
    }

    /**
     * @param  PlaceOrderRestRequest  $request
     * @return PlaceOrderRestResponse
     */
    public function placeOrder(PlaceOrderRestRequest $request): PlaceOrderRestResponse
    {
        return $this->placeOrderAsync($request)->wait();
    }

    /**
     * @param  PlaceOrderRestRequest  $request
     * @return PromiseInterface
     */
    public function placeOrderAsync(PlaceOrderRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('PlaceOrder', $request);
    }

    /**
     * @param  UpdatePaymentInfoRestRequest  $request
     * @return UpdatePaymentInfoRestResponse
     */
    public function updatePaymentInfo(UpdatePaymentInfoRestRequest $request): UpdatePaymentInfoRestResponse
    {
        return $this->updatePaymentInfoAsync($request)->wait();
    }

    /**
     * @param  UpdatePaymentInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function updatePaymentInfoAsync(UpdatePaymentInfoRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdatePaymentInfo', $request);
    }

    /**
     * @param  UpdateQuantityForLineItemRestRequest  $request
     * @return UpdateQuantityForLineItemRestResponse
     */
    public function updateQuantityForLineItem(
        UpdateQuantityForLineItemRestRequest $request
    ): UpdateQuantityForLineItemRestResponse {
        return $this->updateQuantityForLineItemAsync($request)->wait();
    }

    /**
     * @param  UpdateQuantityForLineItemRestRequest  $request
     * @return PromiseInterface
     */
    public function updateQuantityForLineItemAsync(UpdateQuantityForLineItemRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateQuantityForLineItem', $request);
    }

    /**
     * @param  UpdateShippingAddressRestRequest  $request
     * @return UpdateShippingAddressRestResponse
     */
    public function updateShippingAddress(UpdateShippingAddressRestRequest $request): UpdateShippingAddressRestResponse
    {
        return $this->updateShippingAddressAsync($request)->wait();
    }

    /**
     * @param  UpdateShippingAddressRestRequest  $request
     * @return PromiseInterface
     */
    public function updateShippingAddressAsync(UpdateShippingAddressRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateShippingAddress', $request);
    }

    /**
     * @param  UpdateShippingOptionRestRequest  $request
     * @return UpdateShippingOptionRestResponse
     */
    public function updateShippingOption(UpdateShippingOptionRestRequest $request): UpdateShippingOptionRestResponse
    {
        return $this->updateShippingOptionAsync($request)->wait();
    }

    /**
     * @param  UpdateShippingOptionRestRequest  $request
     * @return PromiseInterface
     */
    public function updateShippingOptionAsync(UpdateShippingOptionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateShippingOption', $request);
    }

    /**
     * @param  GetGuestCheckoutSessionRestRequest  $request
     * @return GetGuestCheckoutSessionRestResponse
     */
    public function getGuestCheckoutSession(
        GetGuestCheckoutSessionRestRequest $request
    ): GetGuestCheckoutSessionRestResponse {
        return $this->getGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param  GetGuestCheckoutSessionRestRequest  $request
     * @return PromiseInterface
     */
    public function getGuestCheckoutSessionAsync(GetGuestCheckoutSessionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetGuestCheckoutSession', $request);
    }

    /**
     * @param  InitiateGuestCheckoutSessionRestRequest  $request
     * @return InitiateGuestCheckoutSessionRestResponse
     */
    public function initiateGuestCheckoutSession(
        InitiateGuestCheckoutSessionRestRequest $request
    ): InitiateGuestCheckoutSessionRestResponse {
        return $this->initiateGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param  InitiateGuestCheckoutSessionRestRequest  $request
     * @return PromiseInterface
     */
    public function initiateGuestCheckoutSessionAsync(
        InitiateGuestCheckoutSessionRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('InitiateGuestCheckoutSession', $request);
    }

    /**
     * @param  PlaceGuestOrderRestRequest  $request
     * @return PlaceGuestOrderRestResponse
     */
    public function placeGuestOrder(PlaceGuestOrderRestRequest $request): PlaceGuestOrderRestResponse
    {
        return $this->placeGuestOrderAsync($request)->wait();
    }

    /**
     * @param  PlaceGuestOrderRestRequest  $request
     * @return PromiseInterface
     */
    public function placeGuestOrderAsync(PlaceGuestOrderRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('PlaceGuestOrder', $request);
    }

    /**
     * @param  UpdateGuestLineItemQuantityRestRequest  $request
     * @return UpdateGuestLineItemQuantityRestResponse
     */
    public function updateGuestLineItemQuantity(
        UpdateGuestLineItemQuantityRestRequest $request
    ): UpdateGuestLineItemQuantityRestResponse {
        return $this->updateGuestLineItemQuantityAsync($request)->wait();
    }

    /**
     * @param  UpdateGuestLineItemQuantityRestRequest  $request
     * @return PromiseInterface
     */
    public function updateGuestLineItemQuantityAsync(UpdateGuestLineItemQuantityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateGuestLineItemQuantity', $request);
    }

    /**
     * @param  UpdateGuestLineItemShippingAddressRestRequest  $request
     * @return UpdateGuestLineItemShippingAddressRestResponse
     */
    public function updateGuestLineItemShippingAddress(
        UpdateGuestLineItemShippingAddressRestRequest $request
    ): UpdateGuestLineItemShippingAddressRestResponse {
        return $this->updateGuestLineItemShippingAddressAsync($request)->wait();
    }

    /**
     * @param  UpdateGuestLineItemShippingAddressRestRequest  $request
     * @return PromiseInterface
     */
    public function updateGuestLineItemShippingAddressAsync(
        UpdateGuestLineItemShippingAddressRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('UpdateGuestLineItemShippingAddress', $request);
    }

    /**
     * @param  UpdateGuestPaymentInfoRestRequest  $request
     * @return UpdateGuestPaymentInfoRestResponse
     */
    public function updateGuestPaymentInfo(
        UpdateGuestPaymentInfoRestRequest $request
    ): UpdateGuestPaymentInfoRestResponse {
        return $this->updateGuestPaymentInfoAsync($request)->wait();
    }

    /**
     * @param  UpdateGuestPaymentInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function updateGuestPaymentInfoAsync(
        UpdateGuestPaymentInfoRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('UpdateGuestPaymentInfo', $request);
    }

    /**
     * @param  UpdateGuestShippingOptionRestRequest  $request
     * @return UpdateGuestShippingOptionRestResponse
     */
    public function updateGuestShippingOption(
        UpdateGuestShippingOptionRestRequest $request
    ): UpdateGuestShippingOptionRestResponse {
        return $this->updateGuestShippingOptionAsync($request)->wait();
    }

    /**
     * @param  UpdateGuestShippingOptionRestRequest  $request
     * @return PromiseInterface
     */
    public function updateGuestShippingOptionAsync(UpdateGuestShippingOptionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateGuestShippingOption', $request);
    }

    /**
     * @param  GetGuestPurchaseOrderRestRequest  $request
     * @return GetGuestPurchaseOrderRestResponse
     */
    public function getGuestPurchaseOrder(GetGuestPurchaseOrderRestRequest $request): GetGuestPurchaseOrderRestResponse
    {
        return $this->getGuestPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param  GetGuestPurchaseOrderRestRequest  $request
     * @return PromiseInterface
     */
    public function getGuestPurchaseOrderAsync(GetGuestPurchaseOrderRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetGuestPurchaseOrder', $request);
    }

    /**
     * @param  GetPurchaseOrderRestRequest  $request
     * @return GetPurchaseOrderRestResponse
     */
    public function getPurchaseOrder(GetPurchaseOrderRestRequest $request): GetPurchaseOrderRestResponse
    {
        return $this->getPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param  GetPurchaseOrderRestRequest  $request
     * @return PromiseInterface
     */
    public function getPurchaseOrderAsync(GetPurchaseOrderRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetPurchaseOrder', $request);
    }
}
