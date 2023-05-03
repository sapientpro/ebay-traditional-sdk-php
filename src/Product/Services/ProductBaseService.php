<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Services;

use SapientPro\EbayTraditionalSDK\Services\BaseService;

/**
 * Base class for the Product service.
 */
class ProductBaseService extends BaseService
{
    /**
     * HTTP header constant. The API version your application supports.
     */
    public const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    /**
     * HTTP header constant. Your application ID.
     */
    public const HDR_APP_ID = 'X-EBAY-SOA-SECURITY-APPNAME';

    /**
     * HTTP header constant. The global ID of the eBay site the request is for.
     */
    public const HDR_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    public const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        parent::__construct(
            'https://svcs.ebay.com/services/marketplacecatalog/ProductService/v1',
            'https://svcs.sandbox.ebay.com/services/marketplacecatalog/ProductService/v1',
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
                'apiVersion' => [
                    'valid'   => ['string'],
                    'default' => ProductService::API_VERSION,
                ],
                'globalId'   => [
                    'valid' => ['string'],
                ],
            ];
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
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_APP_ID] = $this->getConfig('credentials')->getAppId();
        $headers[self::HDR_OPERATION_NAME] = $operationName;

        // Add optional headers.
        if ($this->getConfig('apiVersion')) {
            $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        }

        if ($this->getConfig('globalId')) {
            $headers[self::HDR_GLOBAL_ID] = $this->getConfig('globalId');
        }

        return $headers;
    }
}
