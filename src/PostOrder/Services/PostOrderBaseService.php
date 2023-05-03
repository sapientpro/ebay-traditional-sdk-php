<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Services;

use SapientPro\EbayTraditionalSDK\Services\BaseRestService;

/**
 * Base class for the PostOrder service.
 */
class PostOrderBaseService extends BaseRestService
{
    /**
     * HTTP header constant.
     * The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    public const HDR_AUTH_TOKEN = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    public const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * @var array the API endpoints
     */
    protected static array $endPoints = [
            'sandbox'    => 'https://api.sandbox.ebay.com/post-order',
            'production' => 'https://api.ebay.com/post-order',
    ];

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
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
                    'default'  => PostOrderService::API_VERSION,
                    'required' => true,
                ],
                'authToken'     => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'marketplaceId' => [
                    'valid' => ['string'],
                ],
            ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @return array an associative array of eBay HTTP headers
     */
    protected function getEbayHeaders(): array
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTH_TOKEN] = 'TOKEN ' . $this->getConfig('authToken');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
