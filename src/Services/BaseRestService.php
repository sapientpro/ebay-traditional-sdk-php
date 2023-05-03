<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Services;

use SapientPro\EbayTraditionalSDK as Functions;
use SapientPro\EbayTraditionalSDK\ConfigurationResolver;
use SapientPro\EbayTraditionalSDK\Parser\JsonParser;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use SapientPro\EbayTraditionalSDK\UriResolver;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

use function strlen;

/**
 * The base class for every eBay REST service class.
 */
abstract class BaseRestService
{
    /**
     * HTTP header constant. Describes the natural language provided in the field values of the request payload.
     */
    public const HDR_REQUEST_LANGUAGE = 'Content-Language';

    /**
     * HTTP header constant. Tells the server the natural language in which the client desires the response.
     */
    public const HDR_RESPONSE_LANGUAGE = 'Accept-Language';

    /**
     * HTTP header constant. Tells the server the encoding in which the client desires the response.
     */
    public const HDR_RESPONSE_ENCODING = 'Accept-Encoding';

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
            'compressResponse' => [
                'valid'   => ['bool'],
                'default' => false,
            ],
            'debug'            => [
                'valid'   => ['bool', 'array'],
                'fn'      => 'SapientPro\EbayTraditionalSDK\applyDebug',
                'default' => false,
            ],
            'httpHandler'      => [
                'valid'   => ['callable'],
                'default' => 'SapientPro\EbayTraditionalSDK\defaultHttpHandler',
            ],
            'httpOptions'      => [
                'valid'   => ['array'],
                'default' => [
                    'http_errors' => false,
                ],
            ],
            'requestLanguage'  => [
                'valid' => ['string'],
            ],
            'responseLanguage' => [
                'valid' => ['string'],
            ],
            'sandbox'          => [
                'valid'   => ['bool'],
                'default' => false,
            ],
        ];
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param  string  $name  the name of the operation
     * @param  BaseType|null  $request  request object containing the request information
     *
     * @return PromiseInterface a promise that will be resolved with an object created from the JSON response
     */
    protected function callOperationAsync(string $name, BaseType $request = null): PromiseInterface
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

                $response = new $responseClass(
                    [],
                    $res->getStatusCode(),
                    $res->getHeaders()
                );

                JsonParser::parseAndAssignProperties($response, $json);

                return $response;
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
     * Method to get the service's configuration.
     *
     * @param  null|string  $option  the name of the option whos value will be returned
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
     * Builds the request body string.
     *
     * @param  array  $request  associative array that is the request body
     *
     * @return string the request body in JSON format
     */
    private function buildRequestBody(array $request): string
    {
        return empty($request) ? '' : json_encode($request);
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
        $headers = $this->getEbayHeaders();

        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'application/json';
        $headers['Content-Length'] = strlen($body);

        // Add optional headers.
        if ($this->getConfig('requestLanguage')) {
            $headers[self::HDR_REQUEST_LANGUAGE] = $this->getConfig('requestLanguage');
        }

        if ($this->getConfig('responseLanguage')) {
            $headers[self::HDR_RESPONSE_LANGUAGE] = $this->getConfig('responseLanguage');
        }

        if ($this->getConfig('compressResponse')) {
            $headers[self::HDR_RESPONSE_ENCODING] = 'application/gzip';
        }

        return $headers;
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @return array an associative array of eBay http headers
     */
    abstract protected function getEbayHeaders(): array;

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
}
