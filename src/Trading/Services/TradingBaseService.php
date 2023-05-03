<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Services;

use SapientPro\EbayTraditionalSDK\Services\BaseService;
use SapientPro\EbayTraditionalSDK\Trading\Types;
use SapientPro\EbayTraditionalSDK\Trading\Types\CustomSecurityHeaderType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Base class for the Trading service.
 */
class TradingBaseService extends BaseService
{
    /**
     * HTTP header constant.
     * The API version your application supports.
     */
    public const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';

    /**
     * HTTP header constant. Your application ID.
     */
    public const HDR_APP_ID = 'X-EBAY-API-APP-NAME';

    /**
     * HTTP header constant. The OAUTH Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    public const HDR_AUTHORIZATION = 'X-EBAY-API-IAF-TOKEN';

    /**
     * HTTP header constant. Your certificate ID.
     */
    public const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';

    /**
     * HTTP header constant. Your developer ID.
     */
    public const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    public const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';

    /**
     * HTTP header constant. The site ID of the eBay site the request is for.
     */
    public const HDR_SITE_ID = 'X-EBAY-API-SITEID';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        parent::__construct(
            'https://api.ebay.com/ws/api.dll',
            'https://api.sandbox.ebay.com/ws/api.dll',
            $config
        );
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array an associative array of configuration definitions
     */
    public static function getConfigDefinitions(): array
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
                'apiVersion'    => [
                    'valid'    => ['string'],
                    'default'  => TradingService::API_VERSION,
                    'required' => true,
                ],
                'authorization' => [
                    'valid' => ['string'],
                ],
                'authToken'     => [
                    'valid' => ['string'],
                ],
                'siteId'        => [
                    'valid'    => ['int', 'string'],
                    'required' => true,
                ],
            ];
    }

    /**
     * Sends an API request.
     *
     * This method overrides the parent so that it can modify
     * the request object before it is handled by the parent class.
     *
     * @param  string  $name  the name of the operation
     * @param  BaseType  $request  request object containing the request information
     * @param  string  $responseClass  the name of the PHP class that will be created from the XML response
     *
     * @return PromiseInterface a promise that will be resolved with an object created from the XML response
     */
    protected function callOperationAsync(string $name, BaseType $request, string $responseClass): PromiseInterface
    {
        // Modify the request object to include the auth token that was set up in the configuration.
        if (null !== $this->getConfig('authorization')) {
            // Don't send requester credentials if oauth authentication needed.
            if (isset($request->RequesterCredentials)) {
                $request->RequesterCredentials = null;
            }
        } elseif (null !== $this->getConfig('authToken')) {
            // Don't modify a request if the token already exists.
            if (!isset($request->RequesterCredentials)) {
                $request->RequesterCredentials = new CustomSecurityHeaderType();
            }
            if (!isset($request->RequesterCredentials->eBayAuthToken)) {
                $request->RequesterCredentials->eBayAuthToken = $this->getConfig('authToken');
            }
        }

        return parent::callOperationAsync($name, $request, $responseClass);
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @param  string  $operationName  the name of the operation been called
     *
     * @return array an associative array of eBay http headers
     */
    protected function getEbayHeaders(string $operationName): array
    {
        $credentials = $this->getConfig('credentials');
        $appId = $credentials->getAppId();
        $certId = $credentials->getCertId();
        $devId = $credentials->getDevId();

        $headers = [];

        // Add required headers first.
        $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_SITE_ID] = $this->getConfig('siteId');

        // Add optional headers.
        if ($appId) {
            $headers[self::HDR_APP_ID] = $appId;
        }

        if ($certId) {
            $headers[self::HDR_CERT_ID] = $certId;
        }

        if ($devId) {
            $headers[self::HDR_DEV_ID] = $devId;
        }

        if ($this->getConfig('authorization')) {
            $headers[self::HDR_AUTHORIZATION] = $this->getConfig('authorization');
        }

        // Note that we have no way of detecting that the actual request has an attachment.
        if ('UploadSiteHostedPictures' === $operationName) {
            $headers['Content-Type'] = 'multipart/form-data;boundary="boundary"';
        }

        return $headers;
    }

    /**
     * Builds the request body string.
     *
     * @param  BaseType  $request  request object containing the request information
     *
     * @return string the request body
     */
    protected function buildRequestBody(BaseType $request): string
    {
        if ($request->hasAttachment() && $request instanceof Types\UploadSiteHostedPicturesRequestType) {
            return $this->buildMultipartFormDataXMLPayload($request)
                . $this->buildMultipartFormDataFilePayload(
                    $request->PictureName,
                    $request->attachment()
                );
        }

        return parent::buildRequestBody($request);
    }
}
