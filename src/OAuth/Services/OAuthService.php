<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\OAuth\Services;

use SapientPro\EbayTraditionalSDK as Functions;
use SapientPro\EbayTraditionalSDK\ConfigurationResolver;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsProvider;
use SapientPro\EbayTraditionalSDK\OAuth\Types\GetAppTokenRestRequest;
use SapientPro\EbayTraditionalSDK\OAuth\Types\GetAppTokenRestResponse;
use SapientPro\EbayTraditionalSDK\OAuth\Types\GetUserTokenRestRequest;
use SapientPro\EbayTraditionalSDK\OAuth\Types\GetUserTokenRestResponse;
use SapientPro\EbayTraditionalSDK\OAuth\Types\RefreshUserTokenRestRequest;
use SapientPro\EbayTraditionalSDK\OAuth\Types\RefreshUserTokenRestResponse;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use SapientPro\EbayTraditionalSDK\UriResolver;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

use function array_key_exists;
use function is_array;
use function strlen;

class OAuthService
{
    public const API_VERSION = 'v1';

    /**
     * @var array the API endpoints
     */
    private static array $endPoints = [
            'sandbox'    => 'https://api.sandbox.ebay.com/identity',
            'production' => 'https://api.ebay.com/identity',
    ];

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    private static array $operations = [
            'getUserToken'     => [
                'method'        => 'POST',
                'resource'      => 'oauth2/token',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\OAuth\Types\GetUserTokenRestResponse',
                'params'        => [
                ],
            ],
            'refreshUserToken' => [
                'method'        => 'POST',
                'resource'      => 'oauth2/token',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\OAuth\Types\RefreshUserTokenRestResponse',
                'params'        => [
                ],
            ],
            'getAppToken'      => [
                'method'        => 'POST',
                'resource'      => 'oauth2/token',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\OAuth\Types\GetAppTokenRestResponse',
                'params'        => [
                ],
            ],
    ];

    /**
     * @var ConfigurationResolver resolves configuration options
     */
    private ConfigurationResolver $resolver;

    /**
     * @var UriResolver resolves uri parameters
     */
    private UriResolver $uriResolver;

    /**
     * @var array associative array storing the current configuration option values
     */
    private array $config;

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->uriResolver = new UriResolver();
        $this->config = $this->resolver->resolve($config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array an associative array of configuration definitions
     */
    public static function getConfigDefinitions(): array
    {
        return [
            'apiVersion'  => [
                'valid'    => ['string'],
                'default'  => self::API_VERSION,
                'required' => true,
            ],
            'profile'     => [
                'valid' => ['string'],
                'fn'    => 'SapientPro\EbayTraditionalSDK\applyProfile',
            ],
            'credentials' => [
                'valid'   => ['SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface', 'array', 'callable'],
                'fn'      => 'SapientPro\EbayTraditionalSDK\applyCredentials',
                'default' => [CredentialsProvider::class, 'defaultProvider'],
            ],
            'debug'       => [
                'valid'   => ['bool', 'array'],
                'fn'      => 'SapientPro\EbayTraditionalSDK\applyDebug',
                'default' => false,
            ],
            'httpHandler' => [
                'valid'   => ['callable'],
                'default' => 'SapientPro\EbayTraditionalSDK\defaultHttpHandler',
            ],
            'httpOptions' => [
                'valid'   => ['array'],
                'default' => [
                    'http_errors' => false,
                ],
            ],
            'ruName'      => [
                'valid'    => ['string'],
                'required' => true,
            ],
            'sandbox'     => [
                'valid'   => ['bool'],
                'default' => false,
            ],
        ];
    }

    /**
     * Helper method to return the value of the credentials configuration option.
     *
     * @return CredentialsInterface|array|null
     */
    public function getCredentials(): CredentialsInterface|array|null
    {
        return $this->getConfig('credentials');
    }

    /**
     * Method to get the service's configuration.
     *
     * @param  string|null  $option  the name of the option whos value will be returned
     *
     * @return mixed returns an associative array of configuration options if no parameters are passed,
     *               otherwise returns the value for the specified configuration option
     */
    public function getConfig(string $option = null): mixed
    {
        return null === $option
            ? $this->config
            : ($this->config[$option]
                ?? null);
    }

    /**
     * Set multiple configuration options.
     *
     * @param  array  $configuration  associative array of configuration options and their values
     */
    public function setConfig(array $configuration): void
    {
        $this->config = Functions\arrayMergeDeep(
            $this->config,
            $this->resolver->resolveOptions($configuration)
        );
    }

    /**
     * @param  array  $params  an associative array with state and scope as the keys
     *
     * @return string the redirect URL
     * @throws invalidArgumentException
     *
     */
    public function redirectUrlForUser(array $params): string
    {
        if (!array_key_exists('state', $params)) {
            throw new InvalidArgumentException('state parameter required');
        }

        if (!array_key_exists('scope', $params)) {
            throw new InvalidArgumentException('scope parameter required');
        }

        $url = $this->getConfig('sandbox')
            ? 'https://auth.sandbox.ebay.com/oauth2/authorize?'
            : 'https://auth.ebay.com/oauth2/authorize?';

        $urlParams = [
            'client_id'     => $this->getConfig('credentials')->getAppId(),
            'redirect_uri'  => $this->getConfig('ruName'),
            'response_type' => 'code',
            'state'         => $params['state'],
            'scope'         => implode(' ', $params['scope']),
        ];

        return $url . http_build_query($urlParams, '', '&', PHP_QUERY_RFC3986);
    }

    /**
     * @param  GetUserTokenRestRequest  $request
     * @return GetUserTokenRestResponse
     */
    public function getUserToken(GetUserTokenRestRequest $request): GetUserTokenRestResponse
    {
        return $this->getUserTokenAsync($request)->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getUserTokenAsync(GetUserTokenRestRequest $request): PromiseInterface
    {
        if (!isset($request->grant_type)) {
            $request->grant_type = 'authorization_code';
        }
        if (!isset($request->redirect_uri)) {
            $request->redirect_uri = $this->getConfig('ruName');
        }

        return $this->callOperationAsync('getUserToken', $request);
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param  string  $name  the name of the operation
     * @param  BaseType|null  $request  request object containing the request information
     *
     * @return PromiseInterface a promise that will be resolved with an object created from the JSON response
     */
    private function callOperationAsync(string $name, BaseType $request = null): PromiseInterface
    {
        $operation = static::$operations[$name];

        $paramValues = [];
        $requestValues = [];

        if ($request) {
            $requestArray = $request->toArray();
            $paramValues = array_intersect_key($requestArray, $operation['params']);
            $requestValues = array_diff_key($requestArray, $operation['params']);
        }

        $url = $this->uriResolver->resolve(
            $this->getUrl(),
            $this->getConfig('apiVersion'),
            $operation['resource'],
            $operation['params'],
            $paramValues
        );
        $method = $operation['method'];
        $body = $this->buildRequestBody($requestValues);
        $headers = $this->buildRequestHeaders($body);
        $responseClass = $operation['responseClass'];
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');

        if (false !== $debug) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request($method, $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass) {
                $json = $res->getBody()->getContents();

                if (false !== $debug) {
                    $this->debugResponse($json);
                }

                return new $responseClass(
                    '' !== $json ? json_decode($json, true) : [],
                    $res->getStatusCode(),
                    $res->getHeaders()
                );
            }
        );
    }

    /**
     * Helper function to return the URL as determined by the sandbox configuration option.
     *
     * @return string either the production or sandbox URL
     */
    private function getUrl(): string
    {
        return $this->getConfig('sandbox') ? static::$endPoints['sandbox'] : static::$endPoints['production'];
    }

    /**
     * Builds the request body string.
     *
     * @param  array  $request  associative array that is the request body
     *
     * @return string the request body in URL-encoded format
     */
    private function buildRequestBody(array $request): string
    {
        $params = array_reduce(array_keys($request), function ($carry, $key) use ($request) {
            $value = $request[$key];
            $carry[$key] = is_array($value) ? implode(' ', $value) : $value;

            return $carry;
        }, []);

        return empty($request) ? '' : http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param  string  $body  the request body
     *
     * @return array an associative array of HTTP headers
     */
    private function buildRequestHeaders(string $body): array
    {
        $credentials = $this->getConfig('credentials');
        $appId = $credentials->getAppId();
        $certId = $credentials->getCertId();

        $headers = [];

        $headers['Accept'] = 'application/json';
        $headers['Authorization'] = 'Basic ' . base64_encode($appId . ':' . $certId);
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $headers['Content-Length'] = strlen($body);

        return $headers;
    }

    /**
     * Sends a debug string of the request details.
     *
     * @param  string  $url  API endpoint
     * @param  array  $headers  associative array of HTTP headers
     * @param  string  $body  the JSON body of the request
     */
    private function debugRequest(string $url, array $headers, string $body): void
    {
        $str = $url . PHP_EOL;

        $str .= array_reduce(array_keys($headers), function ($str, $key) use ($headers) {
            $str .= $key . ': ' . $headers[$key] . PHP_EOL;

            return $str;
        }, '');

        $str .= $body;

        $this->debug($str);
    }

    /**
     * Sends a debug string via the attach debugger.
     *
     * @param  string  $str  the debug information
     */
    private function debug(string $str): void
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }

    /**
     * Sends a debug string of the response details.
     *
     * @param  string  $body  the JSON body of the response
     */
    private function debugResponse(string $body): void
    {
        $this->debug($body);
    }

    /**
     * @param  RefreshUserTokenRestRequest  $request
     * @return RefreshUserTokenRestResponse
     */
    public function refreshUserToken(RefreshUserTokenRestRequest $request): RefreshUserTokenRestResponse
    {
        return $this->refreshUserTokenAsync($request)->wait();
    }

    /**
     * @param  RefreshUserTokenRestRequest  $request
     * @return PromiseInterface
     */
    public function refreshUserTokenAsync(refreshUserTokenRestRequest $request): PromiseInterface
    {
        if (!isset($request->grant_type)) {
            $request->grant_type = 'refresh_token';
        }

        return $this->callOperationAsync('refreshUserToken', $request);
    }

    /**
     * @param  GetAppTokenRestRequest|null  $request
     *
     * @return GetAppTokenRestResponse
     */
    public function getAppToken(GetAppTokenRestRequest $request = null): GetAppTokenRestResponse
    {
        return $this->getAppTokenAsync($request)->wait();
    }

    /**
     * @param  GetAppTokenRestRequest|null  $request
     *
     * @return PromiseInterface
     */
    public function getAppTokenAsync(GetAppTokenRestRequest $request = null): PromiseInterface
    {
        if (!$request) {
            $request = new GetAppTokenRestRequest();
        }
        if (!isset($request->grant_type)) {
            $request->grant_type = 'client_credentials';
        }
        if (!isset($request->redirect_uri)) {
            $request->redirect_uri = $this->getConfig('ruName');
        }
        if (!isset($request->scope)) {
            $request->scope = 'https://api.ebay.com/oauth/api_scope';
        }

        return $this->callOperationAsync('getAppToken', $request);
    }
}
