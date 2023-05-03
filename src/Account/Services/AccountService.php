<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Services;

use SapientPro\EbayTraditionalSDK\Account\Types\CreateAFulfillmentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateAFulfillmentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateAPaymentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateAPaymentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateAReturnPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateAReturnPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateASalesTaxTableRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\CreateASalesTaxTableRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAFulfillmentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAFulfillmentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAPaymentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAPaymentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAReturnPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteAReturnPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteASalesTaxTableRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\DeleteASalesTaxTableRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAccountPrivilegesRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAllSalesTaxTablesRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAllSalesTaxTablesRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByNameRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByNameRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByNameRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByNameRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetASalesTaxTableRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetASalesTaxTableRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetOptedInProgramsRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\GetShippingRateTablesRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\GetShippingRateTablesRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\OptInToProgramRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\OptInToProgramRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\OptOutOfProgramRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\OptOutOfProgramRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAFulfillmentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAFulfillmentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAPaymentPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAPaymentPolicyRestResponse;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAReturnPolicyRestRequest;
use SapientPro\EbayTraditionalSDK\Account\Types\UpdateAReturnPolicyRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class AccountService extends AccountBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'CreateAFulfillmentPolicy'            => [
                'method'        => 'POST',
                'resource'      => 'fulfillment_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\CreateAFulfillmentPolicyRestResponse',
                'params'        => [
                ],
            ],
            'DeleteAFulfillmentPolicy'            => [
                'method'        => 'DELETE',
                'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\DeleteAFulfillmentPolicyRestResponse',
                'params'        => [
                    'fulfillmentPolicyId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetFulfillmentPoliciesByMarketplace' => [
                'method'        => 'GET',
                'resource'      => 'fulfillment_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAFulfillmentPolicyByID'           => [
                'method'        => 'GET',
                'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse',
                'params'        => [
                    'fulfillmentPolicyId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAFulfillmentPolicyByName'         => [
                'method'        => 'GET',
                'resource'      => 'fulfillment_policy/get_by_policy_name',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'name'           => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateAFulfillmentPolicy'            => [
                'method'        => 'PUT',
                'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\UpdateAFulfillmentPolicyRestResponse',
                'params'        => [
                    'fulfillmentPolicyId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateAPaymentPolicy'                => [
                'method'        => 'POST',
                'resource'      => 'payment_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\CreateAPaymentPolicyRestResponse',
                'params'        => [
                ],
            ],
            'DeleteAPaymentPolicy'                => [
                'method'        => 'DELETE',
                'resource'      => 'payment_policy/{payment_policy_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\DeleteAPaymentPolicyRestResponse',
                'params'        => [
                    'payment_policy_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPaymentPoliciesByMarketplace'     => [
                'method'        => 'GET',
                'resource'      => 'payment_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAPaymentPolicyByID'               => [
                'method'        => 'GET',
                'resource'      => 'payment_policy/{paymentPolicyId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByIDRestResponse',
                'params'        => [
                    'paymentPolicyId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAPaymentPolicyByName'             => [
                'method'        => 'GET',
                'resource'      => 'payment_policy/get_by_policy_name',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAPaymentPolicyByNameRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'name'           => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateAPaymentPolicy'                => [
                'method'        => 'PUT',
                'resource'      => 'payment_policy/{payment_policy_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\UpdateAPaymentPolicyRestResponse',
                'params'        => [
                    'payment_policy_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAccountPrivileges'                => [
                'method'        => 'GET',
                'resource'      => 'privilege',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAccountPrivilegesRestResponse',
                'params'        => [
                ],
            ],
            'GetOptedInPrograms'                  => [
                'method'        => 'GET',
                'resource'      => 'program/get_opted_in_programs',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetOptedInProgramsRestResponse',
                'params'        => [
                ],
            ],
            'OptInToProgram'                      => [
                'method'        => 'POST',
                'resource'      => 'program/opt_in',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\OptInToProgramRestResponse',
                'params'        => [
                ],
            ],
            'OptOutOfProgram'                     => [
                'method'        => 'POST',
                'resource'      => 'program/opt_out',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\OptOutOfProgramRestResponse',
                'params'        => [
                ],
            ],
            'GetShippingRateTables'               => [
                'method'        => 'POST',
                'resource'      => 'rate_table',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetShippingRateTablesRestResponse',
                'params'        => [
                    'country_code' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'CreateAReturnPolicy'                 => [
                'method'        => 'POST',
                'resource'      => 'return_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\CreateAReturnPolicyRestResponse',
                'params'        => [
                ],
            ],
            'DeleteAReturnPolicy'                 => [
                'method'        => 'DELETE',
                'resource'      => 'return_policy/{return_policy_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\DeleteAReturnPolicyRestResponse',
                'params'        => [
                    'return_policy_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnPoliciesByMarketplace'      => [
                'method'        => 'GET',
                'resource'      => 'return_policy',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAReturnPolicyByID'                => [
                'method'        => 'GET',
                'resource'      => 'return_policy/{returnPolicyId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByIDRestResponse',
                'params'        => [
                    'returnPolicyId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAReturnPolicyByName'              => [
                'method'        => 'GET',
                'resource'      => 'return_policy/get_by_policy_name',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAReturnPolicyByNameRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'name'           => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateAReturnPolicy'                 => [
                'method'        => 'PUT',
                'resource'      => 'return_policy/{return_policy_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\UpdateAReturnPolicyRestResponse',
                'params'        => [
                    'return_policy_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateASalesTaxTable'                => [
                'method'        => 'PUT',
                'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\CreateASalesTaxTableRestResponse',
                'params'        => [
                    'countryCode'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'jurisdictionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteASalesTaxTable'                => [
                'method'        => 'DELETE',
                'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\DeleteASalesTaxTableRestResponse',
                'params'        => [
                    'countryCode'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'jurisdictionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetASalesTaxTable'                   => [
                'method'        => 'GET',
                'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetASalesTaxTableRestResponse',
                'params'        => [
                    'countryCode'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'jurisdictionId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAllSalesTaxTables'                => [
                'method'        => 'GET',
                'resource'      => 'sales_tax',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Account\Types\GetAllSalesTaxTablesRestResponse',
                'params'        => [
                    'country_code' => [
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

    public function createAFulfillmentPolicy(
        CreateAFulfillmentPolicyRestRequest $request
    ): CreateAFulfillmentPolicyRestResponse {
        return $this->createAFulfillmentPolicyAsync($request)->wait();
    }

    public function createAFulfillmentPolicyAsync(CreateAFulfillmentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateAFulfillmentPolicy', $request);
    }

    public function deleteAFulfillmentPolicy(
        DeleteAFulfillmentPolicyRestRequest $request
    ): DeleteAFulfillmentPolicyRestResponse {
        return $this->deleteAFulfillmentPolicyAsync($request)->wait();
    }

    public function deleteAFulfillmentPolicyAsync(DeleteAFulfillmentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteAFulfillmentPolicy', $request);
    }

    public function getFulfillmentPoliciesByMarketplace(
        GetFulfillmentPoliciesByMarketplaceRestRequest $request
    ): GetFulfillmentPoliciesByMarketplaceRestResponse {
        return $this->getFulfillmentPoliciesByMarketplaceAsync($request)->wait();
    }

    public function getFulfillmentPoliciesByMarketplaceAsync(
        GetFulfillmentPoliciesByMarketplaceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetFulfillmentPoliciesByMarketplace', $request);
    }

    public function getAFulfillmentPolicyByID(
        GetAFulfillmentPolicyByIDRestRequest $request
    ): GetAFulfillmentPolicyByIDRestResponse {
        return $this->getAFulfillmentPolicyByIDAsync($request)->wait();
    }

    public function getAFulfillmentPolicyByIDAsync(GetAFulfillmentPolicyByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByID', $request);
    }

    public function getAFulfillmentPolicyByName(
        GetAFulfillmentPolicyByNameRestRequest $request
    ): GetAFulfillmentPolicyByNameRestResponse {
        return $this->getAFulfillmentPolicyByNameAsync($request)->wait();
    }

    public function getAFulfillmentPolicyByNameAsync(GetAFulfillmentPolicyByNameRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByName', $request);
    }

    public function updateAFulfillmentPolicy(
        UpdateAFulfillmentPolicyRestRequest $request
    ): UpdateAFulfillmentPolicyRestResponse {
        return $this->updateAFulfillmentPolicyAsync($request)->wait();
    }

    public function updateAFulfillmentPolicyAsync(UpdateAFulfillmentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateAFulfillmentPolicy', $request);
    }

    public function createAPaymentPolicy(CreateAPaymentPolicyRestRequest $request): CreateAPaymentPolicyRestResponse
    {
        return $this->createAPaymentPolicyAsync($request)->wait();
    }

    public function createAPaymentPolicyAsync(CreateAPaymentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateAPaymentPolicy', $request);
    }

    public function deleteAPaymentPolicy(DeleteAPaymentPolicyRestRequest $request): DeleteAPaymentPolicyRestResponse
    {
        return $this->deleteAPaymentPolicyAsync($request)->wait();
    }

    public function deleteAPaymentPolicyAsync(DeleteAPaymentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteAPaymentPolicy', $request);
    }

    public function getPaymentPoliciesByMarketplace(
        GetPaymentPoliciesByMarketplaceRestRequest $request
    ): GetPaymentPoliciesByMarketplaceRestResponse {
        return $this->getPaymentPoliciesByMarketplaceAsync($request)->wait();
    }

    public function getPaymentPoliciesByMarketplaceAsync(
        GetPaymentPoliciesByMarketplaceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetPaymentPoliciesByMarketplace', $request);
    }

    public function getAPaymentPolicyByID(GetAPaymentPolicyByIDRestRequest $request): GetAPaymentPolicyByIDRestResponse
    {
        return $this->getAPaymentPolicyByIDAsync($request)->wait();
    }

    public function getAPaymentPolicyByIDAsync(GetAPaymentPolicyByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAPaymentPolicyByID', $request);
    }

    public function getAPaymentPolicyByName(
        GetAPaymentPolicyByNameRestRequest $request
    ): GetAPaymentPolicyByNameRestResponse {
        return $this->getAPaymentPolicyByNameAsync($request)->wait();
    }

    public function getAPaymentPolicyByNameAsync(
        GetAPaymentPolicyByNameRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetAPaymentPolicyByName', $request);
    }

    public function updateAPaymentPolicy(
        UpdateAPaymentPolicyRestRequest $request
    ): UpdateAPaymentPolicyRestResponse {
        return $this->updateAPaymentPolicyAsync($request)->wait();
    }

    public function updateAPaymentPolicyAsync(UpdateAPaymentPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateAPaymentPolicy', $request);
    }

    public function getAccountPrivileges(): GetAccountPrivilegesRestResponse
    {
        return $this->getAccountPrivilegesAsync()->wait();
    }

    public function getAccountPrivilegesAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetAccountPrivileges');
    }

    public function getOptedInPrograms(): GetOptedInProgramsRestResponse
    {
        return $this->getOptedInProgramsAsync()->wait();
    }

    public function getOptedInProgramsAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetOptedInPrograms');
    }

    public function optInToProgram(OptInToProgramRestRequest $request): OptInToProgramRestResponse
    {
        return $this->optInToProgramAsync($request)->wait();
    }

    public function optInToProgramAsync(OptInToProgramRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('OptInToProgram', $request);
    }

    public function optOutOfProgram(OptOutOfProgramRestRequest $request): OptOutOfProgramRestResponse
    {
        return $this->optOutOfProgramAsync($request)->wait();
    }

    public function optOutOfProgramAsync(OptOutOfProgramRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('OptOutOfProgram', $request);
    }

    public function getShippingRateTables(GetShippingRateTablesRestRequest $request): GetShippingRateTablesRestResponse
    {
        return $this->getShippingRateTablesAsync($request)->wait();
    }

    public function getShippingRateTablesAsync(GetShippingRateTablesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetShippingRateTables', $request);
    }

    public function createAReturnPolicy(CreateAReturnPolicyRestRequest $request): CreateAReturnPolicyRestResponse
    {
        return $this->createAReturnPolicyAsync($request)->wait();
    }

    public function createAReturnPolicyAsync(CreateAReturnPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateAReturnPolicy', $request);
    }

    public function deleteAReturnPolicy(DeleteAReturnPolicyRestRequest $request): DeleteAReturnPolicyRestResponse
    {
        return $this->deleteAReturnPolicyAsync($request)->wait();
    }

    public function deleteAReturnPolicyAsync(DeleteAReturnPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteAReturnPolicy', $request);
    }

    public function getReturnPoliciesByMarketplace(
        GetReturnPoliciesByMarketplaceRestRequest $request
    ): GetReturnPoliciesByMarketplaceRestResponse {
        return $this->getReturnPoliciesByMarketplaceAsync($request)->wait();
    }

    public function getReturnPoliciesByMarketplaceAsync(
        GetReturnPoliciesByMarketplaceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetReturnPoliciesByMarketplace', $request);
    }

    public function getAReturnPolicyByID(GetAReturnPolicyByIDRestRequest $request): GetAReturnPolicyByIDRestResponse
    {
        return $this->getAReturnPolicyByIDAsync($request)->wait();
    }

    public function getAReturnPolicyByIDAsync(GetAReturnPolicyByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAReturnPolicyByID', $request);
    }

    public function getAReturnPolicyByName(
        GetAReturnPolicyByNameRestRequest $request
    ): GetAReturnPolicyByNameRestResponse {
        return $this->getAReturnPolicyByNameAsync($request)->wait();
    }

    public function getAReturnPolicyByNameAsync(GetAReturnPolicyByNameRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAReturnPolicyByName', $request);
    }

    public function updateAReturnPolicy(UpdateAReturnPolicyRestRequest $request): UpdateAReturnPolicyRestResponse
    {
        return $this->updateAReturnPolicyAsync($request)->wait();
    }

    public function updateAReturnPolicyAsync(UpdateAReturnPolicyRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateAReturnPolicy', $request);
    }

    public function createASalesTaxTable(CreateASalesTaxTableRestRequest $request): CreateASalesTaxTableRestResponse
    {
        return $this->createASalesTaxTableAsync($request)->wait();
    }

    public function createASalesTaxTableAsync(CreateASalesTaxTableRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateASalesTaxTable', $request);
    }

    public function deleteASalesTaxTable(DeleteASalesTaxTableRestRequest $request): DeleteASalesTaxTableRestResponse
    {
        return $this->deleteASalesTaxTableAsync($request)->wait();
    }

    public function deleteASalesTaxTableAsync(DeleteASalesTaxTableRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteASalesTaxTable', $request);
    }

    public function getASalesTaxTable(GetASalesTaxTableRestRequest $request): GetASalesTaxTableRestResponse
    {
        return $this->getASalesTaxTableAsync($request)->wait();
    }

    public function getASalesTaxTableAsync(GetASalesTaxTableRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetASalesTaxTable', $request);
    }

    public function getAllSalesTaxTables(GetAllSalesTaxTablesRestRequest $request): GetAllSalesTaxTablesRestResponse
    {
        return $this->getAllSalesTaxTablesAsync($request)->wait();
    }

    public function getAllSalesTaxTablesAsync(GetAllSalesTaxTablesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAllSalesTaxTables', $request);
    }
}
