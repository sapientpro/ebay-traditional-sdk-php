<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Services;

use SapientPro\EbayTraditionalSDK as Functions;
use SapientPro\EbayTraditionalSDK\ConfigurationResolver;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface;
use SapientPro\EbayTraditionalSDK\Credentials\CredentialsProvider;
use SapientPro\EbayTraditionalSDK\Parser\XmlParser;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

use function strlen;

/**
 * The base class for every eBay service class.
 */
abstract class BaseService
{
    /**
     * Helper constent when build requests that contain attachments.
     */
    public const CRLF = "\r\n";

    /**
     * HTTP header constant. Tells the server the encoding in which the client desires the response.
     */
    public const HDR_RESPONSE_ENCODING = 'Accept-Encoding';

    /**
     * @var ConfigurationResolver resolves configuration options
     */
    private ConfigurationResolver $resolver;

    /**
     * @var array associative array storing the current configuration option values
     */
    private array $config;

    /**
     * @var string the production URL for the service
     */
    private string $productionUrl;

    /**
     * @var string the sandbox URL for the service
     */
    private string $sandboxUrl;

    /**
     * @param  string  $productionUrl  the production URL
     * @param  string  $sandboxUrl  the sandbox URL
     * @param  array  $config  configuration option values
     */
    public function __construct(
        string $productionUrl,
        string $sandboxUrl,
        array $config
    ) {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->config = $this->resolver->resolve($config);
        $this->productionUrl = $productionUrl;
        $this->sandboxUrl = $sandboxUrl;
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array an associative array of configuration definitions
     */
    public static function getConfigDefinitions(): array
    {
        return [
            'profile'          => [
                'valid' => ['string'],
                'fn'    => 'SapientPro\EbayTraditionalSDK\applyProfile',
            ],
            'compressResponse' => [
                'valid'   => ['bool'],
                'default' => false,
            ],
            'credentials'      => [
                'valid'   => ['SapientPro\EbayTraditionalSDK\Credentials\CredentialsInterface', 'array', 'callable'],
                'fn'      => 'SapientPro\EbayTraditionalSDK\applyCredentials',
                'default' => [CredentialsProvider::class, 'defaultProvider'],
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
                'default' => [],
            ],
            'sandbox'          => [
                'valid'   => ['bool'],
                'default' => false,
            ],
        ];
    }

    /**
     * Helper method to return the value of the credentials configuration option.
     *
     * @return CredentialsInterface
     */
    public function getCredentials(): CredentialsInterface
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
     * Sends an asynchronous API request.
     *
     * @param  string  $name  the name of the operation
     * @param  BaseType  $request  request object containing the request information
     * @param  string  $responseClass  the name of the PHP class that will be created from the XML response
     *
     * @return PromiseInterface a promise that will be resolved with an object created from the XML response
     */
    protected function callOperationAsync(string $name, BaseType $request, string $responseClass): PromiseInterface
    {
        $url = $this->getUrl();
        $body = $this->buildRequestBody($request);
        $headers = $this->buildRequestHeaders($name, $request, $body);
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');

        if (false !== $debug) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request('POST', $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass) {
                [$xmlResponse, $attachment] = $this->extractXml($res->getBody()->getContents());

                if (false !== $debug) {
                    $this->debugResponse($xmlResponse);
                }

                $xmlParser = new XmlParser($responseClass);

                $response = $xmlParser->parse($xmlResponse);
                $response->attachment($attachment);

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
        return $this->getConfig('sandbox') ? $this->sandboxUrl : $this->productionUrl;
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
        if (!$request->hasAttachment()) {
            return $request->toRequestXml();
        }

        return $this->buildXopDocument($request) . $this->buildAttachmentBody($request->attachment());
    }

    /**
     * Builds the XOP document part of the request body string.
     *
     * @param  BaseType  $request  request object containing the request information
     *
     * @return string the XOP document part of request body
     */
    private function buildXopDocument(BaseType $request): string
    {
        return sprintf(
            '%s%s%s%s%s',
            '--MIME_boundary' . self::CRLF,
            'Content-Type: application/xop+xml;charset=UTF-8;type="text/xml"' . self::CRLF,
            'Content-Transfer-Encoding: 8bit' . self::CRLF,
            'Content-ID: <request.xml@devbay.net>' . self::CRLF . self::CRLF,
            $request->toRequestXml() . self::CRLF
        );
    }

    /**
     * Builds the attachment part of the request body string.
     *
     * @param  array  $attachment  The attachment
     *
     * @return string the attachment part of request body
     */
    private function buildAttachmentBody(array $attachment): string
    {
        return sprintf(
            '%s%s%s%s%s%s',
            '--MIME_boundary' . self::CRLF,
            'Content-Type: ' . $attachment['mimeType'] . self::CRLF,
            'Content-Transfer-Encoding: binary' . self::CRLF,
            'Content-ID: <attachment.bin@devbay.net>' . self::CRLF . self::CRLF,
            $attachment['data'] . self::CRLF,
            '--MIME_boundary--'
        );
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param  string  $name  the name of the operation
     * @param  BaseType  $request  request object containing the request information
     * @param  string  $body  the request body
     *
     * @return array an associative array of HTTP headers
     */
    private function buildRequestHeaders(string $name, BaseType $request, string $body): array
    {
        $headers = [];

        if ($request->hasAttachment()) {
            $headers['Content-Type'] = 'multipart/related;boundary=MIME_boundary;type="application/xop+xml";start="<request.xml@devbay.net>";start-info="text/xml"';
        } else {
            $headers['Content-Type'] = 'text/xml';
        }

        if ($this->getConfig('compressResponse')) {
            $headers[self::HDR_RESPONSE_ENCODING] = 'application/gzip';
        }

        $headers['Content-Length'] = strlen($body);

        return array_merge($headers, $this->getEbayHeaders($name));
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @param  string  $operationName  the name of the operation been called
     *
     * @return array an associative array of eBay http headers
     */
    abstract protected function getEbayHeaders(string $operationName): array;

    /**
     * Sends a debug string of the request details.
     *
     * @param  string  $url  API endpoint
     * @param  array  $headers  associative array of HTTP headers
     * @param  string  $body  the XML body of the POST request
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
     * @param  string  $str
     */
    private function debug(string $str): void
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }

    /**
     * Extracts the XML from the response if it contains an attachment.
     *
     * @param  string  $response  the XML response body
     *
     * @return array first item is the XML part of response body and the second
     *               is an attachement if one was present in the API response
     */
    private function extractXml(string $response): array
    {
        // Ugly way of seeing if an attachment is present in the response.
        if (false === strpos($response, 'application/xop+xml')) {
            return [$response, ['data' => null, 'mimeType' => null]];
        }

        return $this->extractXmlAndAttachment($response);
    }

    /**
     * Extracts the XML and the attachment from the response if it contains an attachment.
     *
     * @param  string  $response  the XML response body
     *
     * @return array the XML part of response body
     */
    private function extractXmlAndAttachment(string $response): array
    {
        $attachment = ['data' => null, 'mimeType' => null];

        preg_match('/\r\n/', $response, $matches, PREG_OFFSET_CAPTURE);
        $boundary = substr($response, 0, $matches[0][1]);

        $xmlStartPos = strpos($response, '<?xml ');
        $xmlEndPos = strpos($response, $boundary, $xmlStartPos) - 2;
        $xml = substr($response, $xmlStartPos, $xmlEndPos - $xmlStartPos);

        preg_match('/\r\n\r\n/', $response, $matches, PREG_OFFSET_CAPTURE, $xmlEndPos);
        $attachmentStartPos = $matches[0][1] + 4;
        $attachmentEndPos = strpos($response, $boundary, $attachmentStartPos) - 2;
        $attachment['data'] = substr($response, $attachmentStartPos, $attachmentEndPos - $attachmentStartPos);

        $mimeTypeStartPos = strpos($response, 'Content-Type: ', $xmlEndPos) + 14;
        preg_match('/\r\n/', $response, $matches, PREG_OFFSET_CAPTURE, $mimeTypeStartPos);
        $mimeTypeEndPos = $matches[0][1];
        $attachment['mimeType'] = substr($response, $mimeTypeStartPos, $mimeTypeEndPos - $mimeTypeStartPos);

        return [$xml, $attachment];
    }

    /**
     * Sends a debug string of the response details.
     *
     * @param  string  $body  the XML body of the response
     */
    private function debugResponse(string $body): void
    {
        $this->debug($body);
    }

    /**
     * Builds the XML payload part of a multipart/form-data request body.
     *
     * @param  BaseType  $request  request object containing the request information
     *
     * @return string the XML payload part of a multipart/form-data request body
     */
    protected function buildMultipartFormDataXMLPayload(BaseType $request): string
    {
        return sprintf(
            '%s%s%s',
            '--boundary' . self::CRLF,
            'Content-Disposition: form-data; name="XML Payload"' . self::CRLF . self::CRLF,
            $request->toRequestXml() . self::CRLF
        );
    }

    /**
     * Builds the file part of a multipart/form-data request body.
     *
     * @param  string  $name
     * @param  array  $attachment
     *
     * @return string the file part of a multipart/form-data request body
     */
    protected function buildMultipartFormDataFilePayload(string $name, array $attachment): string
    {
        return sprintf(
            '%s%s%s%s%s',
            '--boundary' . self::CRLF,
            'Content-Disposition: form-data; name="' . $name . '"; filename="picture"' . self::CRLF,
            'Content-Type: ' . $attachment['mimeType'] . self::CRLF . self::CRLF,
            $attachment['data'] . self::CRLF,
            '--boundary--'
        );
    }
}
