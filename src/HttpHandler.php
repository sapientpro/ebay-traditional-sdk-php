<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr7Request;

/**
 * @internal sends PSR-7-compatible requests using a Guzzle client
 */
final class HttpHandler
{
    /**
     * @var array associative array of HTTP options that the SDK supports
     */
    private static array $validOptions = [
            'connect_timeout' => true,
            'curl'            => true,
            'debug'           => true,
            'delay'           => true,
            'http_errors'     => true,
            'proxy'           => true,
            'timeout'         => true,
            'verify'          => true,
    ];

    /**
     * @var ClientInterface the client for making the HTTP request
     */
    private ClientInterface $client;

    /**
     * @param  ClientInterface|null  $client  the client for making the HTTP request
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @param  Psr7Request|RequestInterface  $request
     * @param  array  $options  http options for the client
     *
     * @return PromiseInterface promise that will be resolved with a
     *                          Psr\Http\Message\ResponseInterface response object
     */
    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        // Remove options that are not supported.
        foreach (array_keys($options) as $key) {
            if (!isset(self::$validOptions[$key])) {
                unset($options[$key]);
            }
        }

        return $this->client->sendAsync($request, $options);
    }
}
